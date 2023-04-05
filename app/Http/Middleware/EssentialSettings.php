<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class EssentialSettings
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //If env variables have been generated via the install procedure
        if (env('DB_HOST') == '' || env('DB_DATABASE') == '' || env('DB_USERNAME') == '' || env('APP_URL') == '') {
            return redirect(route('install-app'));
        }

        //Set current language
        if (Schema::hasTable('languages')) {
            $locale = \App\Models\Admin\Language::getSelected();
            $locale = $locale ? $locale : 'english';
            \App::setLocale($locale);
        }

        return $next($request);
    }
}
