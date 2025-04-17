<?php

use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProductController;

Route::get('/', [HomeController::class, 'HomePage']);
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');
Route::get('/{slug}', [AdminBlogController::class, 'show'])->name('blog.show');
Auth::routes();

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('products', AdminProductController::class);
    Route::resource('blogs', AdminBlogController::class);
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
