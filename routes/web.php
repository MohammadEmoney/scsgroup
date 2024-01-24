<?php

use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PortfolioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', "/" . app()->getLocale());
Route::middleware('setlocale')->group(function () {
    Route::group(['prefix' => '{locale}'], function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::get('/about', [AboutController::class, 'index'])->name('about');
        Route::get('portfolios/{portfolio:slug}', [PortfolioController::class, 'show'])->name('portfolios.show');
    })->where('locale', '[a-zA-Z]{2}');
});

// Auth::routes();
