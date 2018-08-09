<?php

namespace App\Http\Middleware;

use Closure;

class ProfessorMiddleware
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

        if(\Auth::guest() || \Auth::user()->tipousuario_id != 2){
            return redirect("login");
            }
        }
        return $next($request);
    }

