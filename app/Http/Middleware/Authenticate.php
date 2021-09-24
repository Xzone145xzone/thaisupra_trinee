<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use Session;

class Authenticate extends Middleware
{
     public function handle($request, Closure $next)
    {
        if (!$request->session()->exists('uAuth')) {
            return redirect('/');
        }
        return $next($request);
    }
}
