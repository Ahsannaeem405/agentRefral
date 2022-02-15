<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cites;


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
    
}
