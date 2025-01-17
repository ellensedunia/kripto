<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Periksa apakah user memiliki role yang sesuai
        if (Auth::check() && Auth::user()->role === $role) {
            return $next($request); // Loloskan request
        }

        // Jika role tidak sesuai, return unauthorized
        return response()->json(['message' => 'Unauthorized'], 403);
    }
}
