<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role=null)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        if (!$request->user()->hasRole($role)) {
            return abort(404);
        }

        return $next($request);
    }
}
