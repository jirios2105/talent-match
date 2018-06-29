<?php

namespace App\Http\Middleware;

use Closure;

class IsUserActive
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
       // return $request->ajax();
        if(auth()->user()->confirmed){
            if($request->ajax()){
                return 'ok';
            }
            return $next($request);
        }

        if($request->ajax()){
            return 'no';
        }


        return response()->view('errors.11', ['user'=>auth()->user()], 500);
        
    }
}
