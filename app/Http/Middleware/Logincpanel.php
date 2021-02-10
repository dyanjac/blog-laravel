<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Logincpanel
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
       // return $next($request);

          if (!session()->exists('user')) {

             //  return $next($request);
           // return view('index', array("page" => "Authenticate" ));

            return redirect('login');
        }
        
            //return redirect('login');

          return $next($request);


    }
}
