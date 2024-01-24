<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use App\Traits\SettingsTrait;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use SettingsTrait;

    public function index()
    {
        $settings = $this->settings(app()->getLocale());
        $categories = Category::isActive()->with('portfolios')->orderBy('name_en')->get();
        $portfolios = Portfolio::isActive()->with('media', 'categories')->get();
        return view('front.home.index', compact('settings', 'categories', 'portfolios'));
    }
}
