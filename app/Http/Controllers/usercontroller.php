<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cites;
use App\Models\User;
use App\Models\referral_user;
use App\Models\referral;
use Auth;

class usercontroller extends Controller
{
    public function referrals()
    {
      
       
        $user= User::where('role','2')
               ->where('id','!=',Auth::user()->id)
               ->whereNotNull('status')
               ->withCount('get_refrral')
               ->get();
        $usery=User::where('role','2')
               ->whereNotNull('status')

               ->withCount('get_refrral')
               ->get(); 
                $ordersy =collect($usery);
                                          

                $myuser = $ordersy->groupBy('city');
                foreach ($myuser as $key => $value_k) 
                {  
                               
                    $orders2=collect($value_k);
                    $max_gold_id = $orders2->max('get_refrral_count');
                    $gold=$orders2->where('get_refrral_count','=',$max_gold_id);
                    foreach ($gold as $key => $row_user) {
                        
                        if($row_user->city==Auth::user()->city)
                        {
                            if($row_user->id==Auth::user()->id)
                            {
                                $my_badge=1;
                            }
                            else{
                                $my_badge=2;

                            }
                        }

                    }
                }
               
               
            
                $orders =collect($user);
                                          

                $user = $orders->groupBy('city');

               
               
        $ref_user= referral_user::where('add_by',Auth::user()->id)->get();
        
        $citiy = cites::all();

       return view('backend.agent.referrals' ,compact('user','citiy','ref_user','my_badge'));

    }
    public function loc_referrals(Request $request)
    {
      
       
        $user= User::where('role','2')
               ->where('id','!=',Auth::user()->id)
               ->whereNotNull('status')
               ->withCount('get_refrral')
               ->get();
        $usery=User::where('role','2')
               ->whereNotNull('status')

               ->withCount('get_refrral')
               ->get(); 
                $ordersy =collect($usery);
                                          

                $myuser = $ordersy->groupBy('city');
                foreach ($myuser as $key => $value_k) 
                {  
                               
                    $orders2=collect($value_k);
                    $max_gold_id = $orders2->max('get_refrral_count');
                    $gold=$orders2->where('get_refrral_count','=',$max_gold_id);
                    foreach ($gold as $key => $row_user) {
                        
                        if($row_user->city==Auth::user()->city)
                        {
                            if($row_user->id==Auth::user()->id)
                            {
                                $my_badge=1;
                            }
                            else{
                                $my_badge=2;

                            }
                        }

                    }
                }
               
               
            
                $orders =collect($user);
                                          

                $user = $orders->groupBy('city');

               
               
        $ref_user= referral_user::where('add_by',Auth::user()->id)->get();
        
        $citiy = cites::all();

        return view('backend.agent.loc_referrals' ,compact('user','citiy','ref_user','my_badge'));

     

    }
    public function dashboard_index(){
        $id=Auth()->user()->id;
       
       $pending=referral::where('sender_id',$id)->where('status',null)->get()->count();
       $accepted=referral::where('sender_id',$id)->where('status','accepted')->get()->count();
       $sent=referral::where('sender_id',$id)->get()->count();
       $recieved=referral::where('reciver_id',$id)->get()->count();
  

     
   return view('backend.agent.index',compact('pending','accepted', 'sent', 'recieved'));
    }
    
}
