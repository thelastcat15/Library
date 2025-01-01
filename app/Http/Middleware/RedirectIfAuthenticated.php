<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next)
    {
      redirect('/admin');
        if (Auth::check()) {
            return redirect('/admin');
        }

        return $next($request);
    }
}
