<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;


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
Route::get('/cart', [MainController::class, 'cart']);
Route::get('/checkout', [MainController::class, 'checkout']);
Route::get('/single-news', [MainController::class, 'single_news']);
Route::get('/account-profile', [MainController::class, 'account_profile']);
//Product Site
    Route::get('/shop', [ProductController::class, 'shop']);
    Route::get('/single-product/{id}', [ProductController::class, 'single_product']);
// cart
    Route::get('/add-cart/{id}', [CartController::class, 'add_cart'])->name('addCart');
    Route::get('/show-cart', [CartController::class, 'show_cart'])->name('showCart');
    Route::post('/update-qty-cart/{id}', [CartController::class, 'update_quantity'])->name('updateCart');
    Route::get('delete-cart/{id}', [CartController::class, 'delete_cart'])->name('deleteCart');
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
    Route::get('/profileEdit/{id}', [UserController::class, 'profile_edit'])->name('profile.edit');
    Route::put('/profileUpdate/{id}', [UserController::class, 'profile_update'])->name('profile.update');

    Route::post('/passUpdate', [UserController::class, 'pass_update'])->name('pass.update');

//End Auth

Route::get('/', function () {
    return view('client/home');
});
