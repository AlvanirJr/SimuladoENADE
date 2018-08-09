<?php

namespace App\Http\Middleware;

use Closure;

class AlunoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){

        $user = \Auth::user()->tipousuario_id;

        if ($user == 1){

            return $next($request);
        }

        return redirect("Login");
        /*if(\Auth::guest() || \Auth::user()->Usuario->tipousuario_id === 1){
            return redirect("login");
        }
        }return $next($request);
*/
}
}
