<?php

namespace OptimistDigital\NovaRedirects\Http\Middleware;

class RedirectToIntendedUrl
{
    public function handle($request, \Closure $next)
    {
        $redirect = \OptimistDigital\NovaRedirects\Models\Redirect::whereFromUrl($request->path())->first();

        if ($redirect) {
            return redirect($redirect->to_url);
        }

        return $next($request);
    }
}
