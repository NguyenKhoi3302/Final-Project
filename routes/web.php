<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\CategoryController;
use \App\Http\Controllers\BECategoryCotroller;
use \App\Http\Controllers\BEBrandsController;
use \App\Http\Controllers\BEProductController;
use \App\Http\Controllers\BEProductAttributeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;


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


Route::get('/', [NewsController::class, 'home']);
Route::get('/contact', [MainController::class, 'contact']);
Route::get('/about', [MainController::class, 'about']);

Route::get('/news', [NewsController::class, 'index']);

Route::get('/single-news/{id}', [NewsController::class, 'single_news']);
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/contact', [MainController::class, 'contact']);
Route::get('/about', [MainController::class, 'about']);
//Route::get('/cart', [MainController::class, 'cart']);
Route::get('/checkout', [MainController::class, 'checkout']);
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

//admin

// Dashboard
Route::get('admin', [AdminController::class, 'dashboard']);
// News
Route::get('/admin/news', [NewsController::class, 'news_list']);
Route::get('/admin/news/add', [NewsController::class, 'add']);
Route::post('/admin/news/add', [NewsController::class, 'add_']);
Route::get('/admin/news/hot/{id}', [NewsController::class, 'hot']);
Route::get('/admin/news/appear/{id}', [NewsController::class, 'appear']);
Route::get('/admin/news/update/{id}', [NewsController::class, 'update']);
Route::post('/admin/news/update/{id}', [NewsController::class, 'update_']);
Route::get('/admin/news/delete/{id}', [NewsController::class, 'delete']);
// News categories
Route::get('/admin/news/categories', [CategoryController::class, 'news_cat']);
Route::post('/admin/category/add', [CategoryController::class, 'add_cat']);
Route::get('/admin/category/delete/{id}', [CategoryController::class, 'delete_cat']);
Route::get('/admin/category/update/{id}', [CategoryController::class, 'update_cat']);
Route::post('/admin/category/update/{id}', [CategoryController::class, 'update_cat_']);

Route::get('/admin/orders', [OrdersController::class, 'index']);
Route::get('/admin/order/detail/{id}', [OrdersController::class, 'detail']);


Route::prefix('admin')->group(function (){
//  categories
    Route::get('product_categories', [BECategoryCotroller::class, 'index']);
    Route::post('product_category/save', [BECategoryCotroller::class, 'save']);
    Route::post('product_category/delete', [BECategoryCotroller::class, 'delete']);
    Route::post('product_category/update', [BECategoryCotroller::class, 'update']);
    Route::get('product_category/changeStatus/{id}', [BECategoryCotroller::class, 'change_status']);

// brands
    Route::get('brands', [BEBrandsController::class, 'index']);
    Route::post('brand/delete', [BEBrandsController::class, 'delete']);
    Route::post('brand/save', [BEBrandsController::class, 'save']);
    Route::post('brand/update', [BEBrandsController::class, 'update']);
    Route::get('brand/changeStatus/{id}', [BEBrandsController::class, 'change_status']);

//  Products
    Route::get('products', [BEProductController::class, 'index']);
    Route::get('product/add', [BEProductController::class, 'add']);
    Route::post('product/save', [BEProductController::class, 'save']);
    Route::post('product/delete', [BEProductController::class, 'delete']);
    Route::get('product/update/{id}', [BEProductController::class, 'update']);
    Route::post('product/update/save/{id}', [BEProductController::class, 'update_save']);
    Route::get('product/changeStatus/{id}', [BEProductController::class, 'change_status']);

    Route::get('product/attributes/{id}', [BEProductAttributeController::class, 'product_attribute']);
    Route::post('product/attributes/save', [BEProductAttributeController::class, 'save']);
});

