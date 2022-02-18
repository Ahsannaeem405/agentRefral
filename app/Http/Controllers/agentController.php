<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class agentController extends Controller
{
     public function update_information(Request $request)
    {
        if($request->hasFile('profile_image'))
        {
            $file = $request->profile_image;
            $imageName =  time() . '.'.$file->getClientOriginalExtension();
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
        $user->profile_image = $request->input('profile_image');
        $user->save();
        return back()->with('success', 'Profile Information Updated  Successfully.');
    }

    public function change_password(Request $request)
    {
        
        // $validator=$this->validate($request, [
           
        //     'password' => 'required|confirmed|min:6',
        // ]);
      
       
        $user=User::find($request->agent_id);
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Current password does not match!');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Password successfully changed!');

    }

    public function index(){
        $users=User::orderBy('id', 'desc')->take(3)->get();
        return view("frontend.index" ,compact('users',''));
    }
    
    public function accept_or_reject($id,$status){


    }

}
