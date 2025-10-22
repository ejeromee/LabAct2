<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    
      
     
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(Request): (Response)  $next
     */
     
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // Check if authenticated yung user, if hindi, redirect to login
        if (!$request->user()) {
            return redirect()->route('login');
        }


        // Check if yung user role nag-match sa required role, if hindi, redirect to dashboard with error
        if ($request->user()->role !== $role) {
            return redirect()->route('dashboard')->with('error', 'You do not have permission to access this page.');
        }

        return $next($request);
    }
}
