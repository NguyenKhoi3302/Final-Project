<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;


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


Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/contact', [MainController::class, 'contact']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/news', [MainController::class, 'news']);
Route::get('/shop', [MainController::class, 'shop']);
Route::get('/cart', [MainController::class, 'cart']);
Route::get('/checkout', [MainController::class, 'checkout']);
Route::get('/single-news', [MainController::class, 'single_news']);
Route::get('/single-product', [MainController::class, 'single_product']);
Route::get('/account-profile', [MainController::class, 'account_profile']);

// Auth
    route::get('/login', [UserController::class, 'login'])->name('login');
    route::post('/login', [UserController::class, 'login_action'])->name('login.action');

    route::get('/register', [UserController::class, 'register'])->name('register');
    route::post('/register', [UserController::class, 'register_action'])->name('register.action');

    route::get('/logout', [UserController::class, 'logout'])->name('logout');

    Route::get('forget-password', [UserController::class, 'showForgetPasswordForm'])->name('forget.password.get');
    Route::post('forget-password', [UserController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
    Route::get('reset-password/{token}', [UserController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password', [UserController::class, 'submitResetPasswordForm'])->name('reset.password.post');


    route::get('/profile', [UserController::class, 'profile'])->name('profile');
    route::post('/profile', [UserController::class, 'profile_action'])->name('profile.action');

//End Auth

Route::get('/', function () {
    return view('client/home');
});
