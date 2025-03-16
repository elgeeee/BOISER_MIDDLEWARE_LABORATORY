<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GlobalMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // ✅ Log request details
        error_log('Request URL: ' . $request->fullUrl());
        error_log('Client IP: ' . $request->ip());
        error_log('User Agent: ' . $request->userAgent());

        return $next($request);
    }
}

