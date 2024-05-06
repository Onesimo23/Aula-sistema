<?php
namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        if ($request->user() && $request->user()->role !== $role) {
            return redirect('/'); // ou para qualquer outra rota
        }

        return $next($request);
    }
}
