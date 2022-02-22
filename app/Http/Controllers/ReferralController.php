<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

use App\Models\referral_user;
use App\Models\referral;
use App\Events\MyEvent;

use URL;

use Auth;


class ReferralController extends Controller
{


    public function add_referral(Request $request)
    {

        $notifications = Notification::all();
        //   dd($notifications);

        if ($request->contact == 2) {
            $user          = new referral_user;
            $user->name    = $request->input('name');
            $user->email   = $request->input('email');
            $user->phone   = $request->input('phone');
            $user->add_by  = Auth::user()->id;
            $user->save();

            $referral_user_id = $user->id;
        } else {
            $referral_user_id = $request->input('refer_id');
        }


            $refral            = new referral;
            $refral->sender_id = Auth::user()->id;
            
            $refral->reciver_id= $request->input('reciver_id');
            $refral->type= $request->input('type');
            $refral->profit    = $request->input('profit');
            $refral->timeout   = $request->input('timeout');
            $refral->max       = $request->input('max');
            $refral->min       = $request->input('min');
            $refral->notes     = $request->input('notes');
            $refral->referral_user_id     = $referral_user_id;
            
            $refral->save();

            $sender_id=$request->input('sender_id');
            $reciver_id=$request->input('reciver_id');
            $status=0;

            $notification= new Notification();
            $notification->sender_id=$sender_id;
            $notification->reciver_id=$reciver_id;
            $notification->referral_id=$refral->id;
            
            $notification->type=1;
            
            $notification->status=$status;
            // $notification->referal_id= $refral->id;

           
            $notification->save();

            
                                   $id=intval($notification->reciver_id);
                                   $refer_id=$notification->referral_id;
                                   $name=$notification->user->first_name.' has Sent you a referral ';
                                   $base=URL::to("/");
                                   if($notification->user->profile_image!=null)
                                   {
                                   $img=$base.'/upload/images/'.$notification->user->profile_image;
                                   }
                                   else
                                   {
                                    $img=$base.'/dashboard/img/user.jpg';
                                   }
//dd($img,$notification->user->first_name);
                                 
                event(new MyEvent($id,$name,$img,$refer_id));

            
           

        
       
        if (!is_null($refral)) {
            return back()->with('success', 'City Successfully Add.');
        } else {
            return back()->with('error', 'Whoops! some error encountered. Please try again.');
        }
    }

    public function network()
    {
        $send = referral::where('sender_id', Auth::user()->id)->orderBy('id','desc')->get();
        $reciver = referral::where('reciver_id', Auth::user()->id)->orderBy('id','desc')->get();
        return view('backend.agent.network', compact('send', 'reciver'));
    }

    public function notification_detail($id, $notification_id)
    {

        $notification = Notification::find($notification_id);
        $notification->read = 1;
        $notification->save();
        $reciver = referral::where('id', $id)->get();

        // dd($send);
        // $reciver=referral::where('reciver_id',Auth::user()->id)->get();
        return view('backend.agent.notification_detail_page', compact('reciver'));
    }
}
