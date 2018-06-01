<?php

namespace App\Http\Middleware;

use Closure;

class isWriter
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
           // return $next($request);
           $user = $request->user();
            if($user->role->name == 'Writer'){
               return $next($request); 
            }
            if($user->role->name == 'Admin'){
                return $next($request); 
             }
             else{
                 return redirect('/');
                }
            
            
        
    }
}
