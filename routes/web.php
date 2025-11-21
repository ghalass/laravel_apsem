<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParcsController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TypeparcController;
use Illuminate\Support\Facades\Auth;

// LANG_ROUTES
Route::get('ar', function () {
    session()->put('locale', 'ar');
    return back();
})->name('ar');
Route::get('fr', function () {
    session()->put('locale', 'fr');
    return back();
})->name('fr');
Route::get('en', function () {
    session()->put('locale', 'en');
    return back();
})->name('en');

// HOME
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// RESOURCES
Route::resource('sites', SiteController::class);
Route::resource('typeparcs', TypeparcController::class);
Route::resource('parcs', ParcsController::class);

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

// FALLBACK
Route::fallback(function () {
    return "<h1>PAGE NOT FOUND</h1>";
});
