<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        
        // dd(session()->get('adminLogin'));

        // if (!session()->has('adminLogin') && ($request->path() != 'admin')) {
        // return redirect('/admin');
        // }

        // if (session()->has('adminLogin') && ($request->path() == 'admin')){
        //     return back();
        // }

        if(!Session::get('adminLogin')){
            return redirect('/admin');
        }
        return $next($request);

       


       
    }
}
