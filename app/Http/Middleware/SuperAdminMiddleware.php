<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SuperAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the authenticated user is a super admin
        if (Auth::check() && Auth::user()->is_super_admin === true) {
            return $next($request);
        }

        // Prevent redirecting to the same route and causing a loop
        if ($request->is('/')) {
            return $next($request);  // Allow access to the home route
        }

        // Redirect or abort if not a super admin and trying to access a protected route
        return redirect('/')->with('error', 'Unauthorized access.');
    }

}
