<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Traits\SettingsTrait;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    use SettingsTrait;

    public function index()
    {
        $about = $this->about();
        $settings = $this->settings();
        return view('front.about.index', compact('about', 'settings'));
    }
}
