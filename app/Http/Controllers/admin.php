<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cites;
use App\Models\User;


class admin extends Controller
{
    public function add_city(Request $request)
    {

        

        $user          = new cites;
        $user->name    = $request->input('city');
        
        $user->save();
        if (!is_null($user)) {
            return back()->with('success', 'City Successfully Add.');
        } else {
            return back()->with('error', 'Whoops! some error encountered. Please try again.');
        }

    }
    public function cities()
    {

        

        $user          = cites::all();
        //dd($user);
       return view('backend.admin.cities' ,compact('user'));

    }
    public function agents()
    {

        

        $waiting_user= User::where('role','2')->whereNull('status')->get();
        $user= User::where('role','2')->whereNotNull('status')->get();
        $citiy = cites::all();
       
       return view('backend.admin.total-agents' ,compact('user','waiting_user','citiy'));

    }
    public function approve($id)
    {

        

        $user= User::find($id);
        $user->status='approve';
        $user->save();
        return back()->with('success', 'Agent Approved Successfully.');

    }
    public function reject($id)
    {

        

        $user= User::find($id);
        $user->delete();
        return back()->with('success', 'Agent Reject Successfully.');

    }

    public function update(Request $request,$id)
    {

        

        $user= User::find($id);
        $user->first_name=$request->input('first_name');
        $user->last_name=$request->input('last_name');
        $user->city=$request->input('city');
        $user->save();
        return back()->with('success', 'Agent Update Successfully.');

    }
    
    
    
}
