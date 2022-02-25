<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;


class Checklogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()) 
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

                return redirect('/error');
               

            }
        }    
        else
        {
                
            return $next($request);
        }    

    }
}
