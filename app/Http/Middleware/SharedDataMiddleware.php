<?php

namespace App\Http\Middleware;

use App\Language;
use App\Translation;
use Closure;
use Illuminate\Support\Facades\View;

class SharedDataMiddleware
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

        $file_names = Translation::getAllFileNameList();
        $langauges = Language::getAllLanguages();

        View::share('__FFILENAMES__', $file_names);
        View::share('__FLANGUAGES__', $langauges);
        return $next($request);
    }
}