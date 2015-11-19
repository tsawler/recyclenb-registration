<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class SetLanguageMiddleware {

    /**
     * Handle setting of app language environment. Runs before every
     * request is executed.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ( ! Session::has('lang'))
        {
            Session::put('lang', 'en');
        } else
        {
            if (Session::get('lang') == "en")
            {
                App::setLocale('en');
            } else if (Session::get('lang') == 'fr')
            {
                App::setLocale('fr');
            } else {
                App::setLocale('es');
            }
        }

        return $next($request);
    }

}
