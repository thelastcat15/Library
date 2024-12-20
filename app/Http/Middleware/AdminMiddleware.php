<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Get the authenticated user
        $user = Auth::user();

        $admin = Admin::where('username', $user->username)->first();

        if ($admin) {
            return $next($request);
        }

        return redirect('/')->with('error', 'You do not have admin access.');
    }
}
