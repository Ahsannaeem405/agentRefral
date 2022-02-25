<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        if(Auth::user()->role=='1')
        {
            
            return redirect('admins/index');
        }
        else if(Auth::user()->role=='2' && Auth::user()->status=='approve')
        {
            
            return redirect('user/index');
        }
        else{


            return '/error';

        }
    }
}
