<?php

namespace HitsukayaCart\Http\Middleware;

use Closure;
use HitsukayaCart\Updater;

class RunUpdater
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (config('app.installed') && file_exists(storage_path('app/update'))) {
            Updater::run();
        }

        return $next($request);
    }
}
