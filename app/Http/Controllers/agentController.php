<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\referral;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\cites;
use App\Models\referral_user;
use URL;
use App\Events\MyEvent;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class agentController extends Controller
{
    public function update_information(Request $request)
    {
        if ($request->hasFile('profile_image')) {
            $file = $request->profile_image;
            $imageName =  time() . '.' . $file->getClientOriginalExtension();
            $imagePath = $file->move(public_path('dashboard/img/agent'), $imageName);
        }

        $agent_id = $request->agent_id;
        $user = User::find($agent_id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->city = $request->input('city');
        $user->gender = $request->input('gender');
        if($request->hasFile('file'))
        {

          $file=$request->file('file');
          $extension=$request->file->extension();
          $fileName=time()."_.".$extension;
          $request->file->move('upload/images/',$fileName);
          $user->profile_image =$fileName;
        }
        $user->save();

       
        return back()->with('success', 'Profile Information Updated  Successfully.');
    }

    public function change_password(Request $request)
    {

        


        $user = User::find($request->agent_id);
       
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Current password does not match!');
        }
        else{
            $validator=$this->validate($request, [

                'password' => 'required|confirmed|min:6',
            ]);
            
            $user->password = Hash::make($request->password);
            $user->save();

            return back()->with('success', 'Password successfully changed!');
        }

        
    }

    public function index()
    {
        $users = User::orderBy('id', 'desc')->take(3)->get();
        $cities=cites::count();
        $agent=User::where('role',2)->count();
        $user=referral_user::count();
        $refreal=referral::count();
        return view("frontend.index", compact('users','cities','agent','user','refreal'));
    }

    public function accept_or_reject($id, $status)
    {
        $noti = Notification::all();
    

        $data =referral::find($id);
        $data->status = $status;
        $data->save();

       
        

        $notification= new Notification();
        $notification->sender_id=Auth::user()->id;
        $notification->reciver_id=$data->sender_id;
        $notification->referral_id=$data->id;
        
        $notification->type=2;
        
        if( $status == 'rejected')
        {
        //    dd($id);
            $notification->status = 1;
            $noti_staus = 'Rejected';

        }
        else
        {  
            $notification->status = 2;
            $noti_staus ='Accepted';

        }
        $notification->type=2;
        // $notification->referal_id= $refral->id;

       
        $notification->save();
     // dd($notification);
           $id=intval($notification->reciver_id);
           $refer_id=$notification->referral_id;
           $name=$notification->user->first_name.' '.$noti_staus.' your referral ';
           $base=URL::to("/");
           if($notification->user->profile_image!=null)
           {
           $img=$base.'/upload/images/'.$notification->user->profile_image;
           }
           else
           {
            $img=$base.'/dashboard/img/user.jpg';
           }
//dd($name,$notification->user->first_name);
                                 
                event(new MyEvent($id,$name,$img,$refer_id));

        
        
       
       
        return back()->with('success', 'Updated Sucessfully');
        // dd($data);
        // dd($id);
    }
  
}