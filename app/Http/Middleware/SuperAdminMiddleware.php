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
        if (Auth::check() && Auth::user()->is_super_admin) {
            return $next($request);
        }

        // Redirect or abort if not a super admin
        return redirect('/')->with('error', 'Unauthorized access.');
    }
}
