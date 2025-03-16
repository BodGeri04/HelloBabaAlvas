<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'HomePage']);

Auth::routes();

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('articles', Admin\ArticleController::class);
    Route::resource('products', Admin\ProductController::class);
    Route::resource('pages', Admin\PageController::class);
});

