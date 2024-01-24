<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Traits\SettingsTrait;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    use SettingsTrait;

    public function show($locale, Portfolio $portfolio)
    {
        $portfolio->increment('views');
        $settings = $this->settings(app()->getLocale());
        return view('front.portfolios.show', compact('portfolio', 'settings'));
    }
}
