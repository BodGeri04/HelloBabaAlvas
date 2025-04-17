<?php

use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;

// Laravel auth route-ok beállítása
Auth::routes();

// Kezdőlap
Route::get('/', [HomeController::class, 'HomePage']);

// Kapcsolatfelvétel POST
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// ----- ADMIN RÉSZ -----
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('products', AdminProductController::class);
    Route::resource('blogs', AdminBlogController::class);
    Route::get('/home', [AdminHomeController::class, 'index']);
});

// ----- ADMIN BELÉPÉS -----
Route::get('/admin-login', function (Request $request) {
    if ($request->query('key') !== 'xyz123') {
        abort(404);
    }
    return view('auth.login');
})->name('admin.login');

// Ez a legvégén legyen, hogy ne nyelje el a fenti route-okat
Route::get('/{slug}', [AdminBlogController::class, 'show'])->name('blog.show');