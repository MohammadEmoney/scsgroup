<?php

namespace App\Http\Middleware;

use App\Enums\EnumLanguages;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Settings\Entities\Setting;

class SetLocaleMiddleware
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
        $defaultLocale = app()->getLocale();
        $locale = $request->segment(1); // Get the first segment from the URL (e.g., 'en' or 'de')
        if (!EnumLanguages::getKeyByValue($locale)) {
            if (Auth::check()) {
                $locale = auth()->user()->lang ?: $locale;
            }else{
                $locale = $defaultLocale;
            }
        } else {
            if (Auth::check())
                auth()->user()->update(['lang' => $locale]);
        }
        app()->setLocale($locale);
        request()->session()->put('locale', $locale);

        return $next($request);
    }
}
