<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RightMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Ensure the request has 'email' and 'password' fields
        if (!$request->has(['email', 'password'])) {
            return response()->json([
                'success' => false,
                'message' => 'Email and password are required.',
            ], 400);
        }

        // Allow the request to proceed
        return $next($request);
    }
}
