<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->user() && $request->user()->admin) {
            return $next($request);
        }

        abort(403, 'No tienes permiso para acceder a esta página.');
    }
}