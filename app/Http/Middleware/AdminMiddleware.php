<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (auth()->guest()) {
            return redirect()->route('login')->with('error', 'กรุณาเข้าสู่ระบบ'); // Redirect unauthenticated users to login
        }

        if (auth()->user()->is_admin != 1) {
            return redirect('/')->with('error', 'คุณไม่มีสิทธิ์เข้าถึง'); // Redirect non-admin users
        }

        return $next($request); // Allow admin users
    }
}
