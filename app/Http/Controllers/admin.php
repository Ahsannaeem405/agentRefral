<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cites;
use App\Models\User;
use App\Models\referral_user;
use App\Models\referral;

use App\Events\MyEvent;



class admin extends Controller
{
    public function add_city(Request $request)
    {



        $user          = new cites;
        $user->name    = $request->input('city');

        $user->save();
        if (!is_null($user)) {
            return back()->with('success', 'City Added Successfully.');
        } else {
            return back()->with('error', 'Whoops! some error encountered. Please try again.');
        }
    }
    public function event()
    {
        return view('event');
    }
    public function event2()
    {
    }

    public function index()
    {

        $cities = cites::count();
        $agent = User::where('role', 2)->count();
        $user = referral_user::count();
        $refreal = referral::count();
       

        return view('backend.admin.index', compact('cities', 'agent', 'user', 'refreal'));
    }
    public function users()
    {



        $user = referral_user::all();

        return view('backend.admin.total-users', compact('user'));
    }

    public function cities()
    {



        $user          = cites::all();
        //dd($user);
        return view('backend.admin.cities', compact('user'));
    }
    public function agents()
    {

        $waiting_user = User::where('role', '2')->whereNull('status')->get();
        $user = User::where('role', '2')->whereNotNull('status')->get();
        $citiy = cites::all();

        return view('backend.admin.total-agents', compact('user', 'waiting_user', 'citiy'));
    }
    public function approve($id)
    {



        $user = User::find($id);
        $user->status = 'approve';
        $user->save();
        return back()->with('success', 'Agent Approved Successfully.');
    }
    public function reject($id)
    {



        $user = User::find($id);
        $user->delete();
        return back()->with('success', 'Agent Deleted Successfully.');
    }

    public function update(Request $request, $id)
    {



        $user = User::find($id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->city = $request->input('city');
        $user->save();
        return back()->with('success', 'Agent Updated Successfully.');
    }
    public function update_city(Request $request, $id)
    {

        $user = cites::find($id);
        $user->name = $request->input('city');

        $user->save();
        return back()->with('success', 'City Updated Successfully.');
    }
    public function delete_city(Request $request, $id)
    {



        $user = cites::find($id);


        $user->delete();
        return back()->with('success', 'City Deleted Successfully.');
    }

    public function agent_details($agent_id)
    {

        $send = referral::where('sender_id', $agent_id)->orderBy('id', 'desc')->get();
        $reciver = referral::where('reciver_id', $agent_id)->orderBy('id', 'desc')->get();

        return view('backend.admin.agent-detail-page', compact('send', 'reciver'));
    }
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

       
        return back()->with('success', 'Profile Information Updated Successfully.');
    }

}
