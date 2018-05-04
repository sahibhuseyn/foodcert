<?php

namespace App\Http\Middleware;

use App\Language;
use Closure;
use Illuminate\Support\Facades\View;

class LanguageMiddleware
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
        $visited = session('visited');

        if ($visited != true) {
            session(['language' => 'az']);
            session(['visited' => true]);
        }

        app()->setLocale(session('language'));
        setlocale(LC_TIME, session('language'));

//        $categories = Category::getCategoriesByLanguage(session('language'));
//        $types = Type::getTypesByLanguage(session('language'));
        $languages = Language::getAllLanguages();
//        $courses = Course::getCourses(session('language'));

//        View::share('__FCATEGORIES__', $categories);
//        View::share('__FTYPES__', $types);
        View::share('__FLANGUAGES__', $languages);
//        View::share('__BACOURSES__', $courses);
        return $next($request);
    }
}
