<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next): Response
    {
    //    dd($request->user());

        if ($request->user()) {

            if($request->user()->user_type == 'admin' || $request->user()->user_type == 'agent')
            {
                return $next($request); 
            }
            else
            {
                return redirect()->route('login.form');
            }
            
        }

        return redirect()->route('login.form');
        
    }
}