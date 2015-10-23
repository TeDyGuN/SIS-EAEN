<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        dd($request);
        if($request->type() != 'Admin')
        {
            abort(403, 'Acceso no Autorizado');
        }
        else
        {
            return url('admin/home');
        }
        return $next($request);
    }
}
