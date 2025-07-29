<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class CheckSessionExpiration
{
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Get the login time from the session
            $loginTime = session('login_time');

            // Check if the login time is set and if it has expired (e.g., 30 minutes)
            if ($loginTime && now()->diffInMinutes($loginTime) > 30) {
                Auth::logout(); // Log the user out
                return redirect('/login')->with('message', 'Session expired. Please log in again.');
            }
        }

        return $next($request);
    }
}
