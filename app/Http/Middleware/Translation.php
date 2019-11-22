<?php

namespace App\Http\Middleware;

use Closure;

class Translation
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
        if ($request->has('lang')) {
            \Cache::put("lang", $request->get("lang"));
        }

        return $next($request);
    }
}
