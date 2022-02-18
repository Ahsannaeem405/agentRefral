<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cites;
use App\Models\User;
use App\Models\referral_user;
use Auth;

class usercontroller extends Controller
{
    public function referrals()
    {
      
       
        $user= User::where('role','2')->where('id','!=',Auth::user()->id)->whereNotNull('status')->get();
        $ref_user= referral_user::where('add_by',Auth::user()->id)->get();
        
        $citiy = cites::all();

       return view('backend.agent.referrals' ,compact('user','citiy','ref_user'));

    }
    public function loc_referrals(Request $request)
    {
      
       
        $user= User::where('role','2')->where('city',$request->id)->where('id','!=',Auth::user()->id)->whereNotNull('status')->get();
        $ref_user= referral_user::where('add_by',Auth::user()->id)->get();
        
        $citiy = cites::all();

       return view('backend.agent.loc_referrals' ,compact('user','citiy','ref_user'));

    }
    
}
