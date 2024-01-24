<?php

namespace App\Generators;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Route;

class CustomUrlGenerator extends UrlGenerator
{
    public function route($name, $parameters = [], $absolute = true)
    {
        $parameters = is_array($parameters) ? $parameters : [];
        if(!isset($parameters['locale'])){
            $locale = config('app.locale');
            $parameters['locale'] = $locale;
        }
        return parent::route($name, $parameters, $absolute);
    }

    public static function localeRoute($locale)
    {
        $route = request()->route()->parameters;
        $route['locale'] = $locale;
        request()->session()->put('locale', $locale);

        return route(Route::getCurrentRoute()->getName(), $route);
    }
}
