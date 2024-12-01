<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ClientLogin
{

    public function handle(Request $request, Closure $next)
    {
        if(auth()->guard('Client')->check())
        return $next($request);
    else
    return redirect()->route('login');
    }
}
