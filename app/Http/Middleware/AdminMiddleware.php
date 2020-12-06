<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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
        if(! auth()->check())
            return redirect('home');
        
        if(auth()->user()->role !=0) //si no es admin sera redirigido a home
            return redirect('home');
        
        return $next($request);
    }
}
