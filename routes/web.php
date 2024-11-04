<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LanguageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
})->name('home');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('set-locale/{locale}', [LanguageController::class, 'setLocale'])->name('setLocale');

Route::get('lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'th', 'zh'])) {
        abort(400);
    }
    session(['locale' => $locale]);
    return redirect()->back();
});
