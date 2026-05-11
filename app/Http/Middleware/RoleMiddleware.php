<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role): Response
    {
        // check authentication
        if (!auth()->check()) {
            abort(401, 'Unauthorized');
        }

        $user = auth()->user();

        // support multiple roles (admin|user|tech)
        $roles = explode('|', $role);

        if (!in_array($user->role, $roles)) {
            abort(403, 'Forbidden');
        }

        return $next($request);
    }
}