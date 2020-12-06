<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PublicMiddleware
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
        
        if(auth()->user()->role !=1) //si no es public sera redirigido a home
            return redirect('home');
            
        return $next($request);
    }
}
