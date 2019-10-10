<?php

namespace App\Http\Middleware;

use Closure;

class NotSelf
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
        if(auth()->user()->id == $request->user->id){
            return response("You cannot perform this action to yourself.",500);
        }
        return $next($request);
    }
}
