<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cites;
use App\Models\User;
use Auth;

class usercontroller extends Controller
{
    public function referrals()
    {
      
       
        $user= User::where('role','2')->where('id','!=',Auth::user()->id)->whereNotNull('status')->get();
        
        $citiy = cites::all();

       return view('backend.agent.referrals' ,compact('user','citiy'));

    }
}
