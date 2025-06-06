<?php

use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CookieConsentController;
use Illuminate\Support\Facades\Auth;

// Laravel auth route-ok beállítása
Auth::routes();

// Kezdőlap
Route::get('/', [HomeController::class, 'HomePage'])->name('home');

// Rólam oldal
Route::get('/aboutMe', [HomeController::class, 'aboutMe']);

// Termékek oldal
Route::get('/products', [HomeController::class, 'allProducts']);

// Blogok oldal
Route::get('/blogs', [HomeController::class, 'allBlogs']);

// Kapcsolatfelvétel POST
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::get('/teszt', function () {
    return [
        'env' => env('GOOGLE_RECAPTCHA_SECRET'),
        'config' => config('services.recaptcha.secret'),
    ];
});
// Keresés blogok között
Route::post('/kereses', [HomeController::class, 'searchBlogs'])->name('blog.search');

// Cookie elfogadás
Route::post('/cookie-consent', [CookieConsentController::class, 'store'])->name('cookie.consent');

// Rólam oldal
Route::get('/adatvedelem', [HomeController::class, 'adatVedelem']);

// ----- ADMIN RÉSZ -----
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('products', AdminProductController::class);
    Route::resource('blogs', AdminBlogController::class);
    Route::get('/home', [AdminHomeController::class, 'index']);
    // Karbantartási mód be/ki kapcsolása
    Route::get('/maintenance', [AdminHomeController::class, 'showMaintenance'])->name('maintenance.show');
    Route::post('/maintenance/{action}', [AdminHomeController::class, 'maintenance'])->name('maintenance');
});

// ----- ADMIN BELÉPÉS -----
Route::get('/admin-login', function (Request $request) {
    if ($request->query('key') !== 'IoCnDqxKrHzEq7r') {
        abort(404);
    }
    return view('auth.login');
})->name('admin.login');

// Ez a legvégén legyen, hogy ne nyelje el a fenti route-okat
Route::get('/blog/{slug}', [AdminBlogController::class, 'show'])->name('blog.show');

// Termék oldal
Route::get('/product/{slug}', [HomeController::class, 'product']);
