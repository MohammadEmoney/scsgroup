<?php

namespace App\Providers;

use App\Traits\SettingsTrait;
use Illuminate\Support\Facades;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class ViewServiceProvider extends ServiceProvider
{
    use SettingsTrait;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Facades\View::composer('layouts.partials.footer', function (View $view) {
            $settings = $this->settings(app()->getLocale());
            $view->with(['settings', $settings['footer'] ?? []]);
        });
    }
}
