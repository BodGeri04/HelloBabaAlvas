<?php

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProductController;

Route::get('/', [HomeController::class, 'HomePage']);

Auth::routes();

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('articles', Admin\ArticleController::class);
    Route::resource('products', AdminProductController::class);
    Route::resource('pages', Admin\PageController::class);
    Route::get('/home', [AdminHomeController::class, 'index']);
});
#ADMIN FELULET BELEPESHEZ RESZ-----
Route::get('/admin-login', function (Request $request) {
    if ($request->query('key') !== 'xyz123') {
        abort(404);
    }
    return view('auth.login');
})->name('admin.login');
#-----ADMIN FELULET BELEPESHEZ RESZ
