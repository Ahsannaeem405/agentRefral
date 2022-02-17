<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\referral_user;
use App\Models\referral;


use Auth;


class ReferralController extends Controller
{
    
    public function add_referral(Request $request)
    {
       
        if($request->contact==2)
        {
            $user          = new referral_user;
            $user->name    = $request->input('name');
            $user->email   = $request->input('email');
            $user->phone   = $request->input('phone');
            $user->add_by  = Auth::user()->id;
            $user->save();

            $referral_user_id=$user->id;

        }
        else{
           $referral_user_id=1;
        }
            $refral            = new referral;
            $refral->sender_id = Auth::user()->id;
            $refral->reciver_id= $request->input('reciver_id');
            $refral->profit    = $request->input('profit');
            $refral->timeout   = $request->input('timeout');
            $refral->max       = $request->input('max');
            $refral->min       = $request->input('min');
            $refral->notes     = $request->input('notes');
            $refral->referral_user_id     = $referral_user_id;
            
            $refral->save();


        

        
       
        if (!is_null($refral)) {
            return back()->with('success', 'City Successfully Add.');
        } else {
            return back()->with('error', 'Whoops! some error encountered. Please try again.');
        }

    }
    
    public function network()
    {
        $send=referral::where('sender_id',Auth::user()->id)->get();
        $reciver=referral::where('reciver_id',Auth::user()->id)->get();
        return view('backend.agent.network',compact('send','reciver'));
    }
}
