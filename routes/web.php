<?php

use App\Http\Controllers\ParcsController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TypeparcController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home')->middleware('PoliceMan');

Route::resource('sites', SiteController::class);
Route::resource('typeparcs', TypeparcController::class);
Route::resource('parcs', ParcsController::class);

Route::fallback(function () {
    return "<h1>PAGE NOT FOUND</h1>";
});
