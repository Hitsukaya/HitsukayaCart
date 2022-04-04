<?php

namespace HitsukayaCart\Http\Middleware;

use Closure;
use HitsukayaCart\License;

class RedirectIfShouldNotCreateLicense
{
    private $license;

    public function __construct(License $license)
    {
        $this->license = $license;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->license->valid() || ! $this->license->shouldCreateLicense()) {
            return redirect()->intended('/admin');
        }

        return $next($request);
    }
}
