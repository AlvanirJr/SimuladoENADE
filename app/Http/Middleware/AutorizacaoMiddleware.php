<?php

namespace App\Http\Middleware;

use Closure;

class AutorizacaoMiddleware
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
        if($request->is("/cadastrar/ciclo")) {
            if(\Auth::guest() || \Auth::user()->Usuario->tipo_usuario_id != 1)
                return redirect("login");
        }

        return $next($request);
    }
}
