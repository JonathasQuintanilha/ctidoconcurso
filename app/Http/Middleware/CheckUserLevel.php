<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckUserLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


            


            if (Auth::User()->niveis_id == 1) {
                    


            } 

            if (Auth::User()->niveis_id == 2) {
                    


            } 

            if (Auth::User()->niveis_id == 3) {
                    


            } 

            if (Auth::User()->niveis_id == 4) {
                    
                

            } 





        return $next($request);
    }
}
