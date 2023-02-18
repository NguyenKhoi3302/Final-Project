<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MainController;


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


Route::get('/', [MainController::class, 'index']);
Route::get('/contact', [MainController::class, 'contact']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/news', [MainController::class, 'news']);
Route::get('/shop', [MainController::class, 'shop']);
Route::get('/cart', [MainController::class, 'cart']);
Route::get('/checkout', [MainController::class, 'checkout']);
Route::get('/single-news', [MainController::class, 'single_news']);
Route::get('/single-product', [MainController::class, 'single_product']);
Route::get('/account-profile', [MainController::class, 'account_profile']);

// Route::get('/', function () {
//     return view('client/home');
// });
// News
Route::view('admin','admin.dashboard');
Route::get('/admin/news', [NewsController::class, 'news_list']);
Route::get('/admin/news/add', [NewsController::class, 'add']);
Route::post('/admin/news/add', [NewsController::class, 'add_']);
Route::get('/admin/news/update/{id}', [NewsController::class, 'update']);
Route::post('/admin/news/update/{id}', [NewsController::class, 'update_']);
Route::get('/admin/news/delete/{id}', [NewsController::class, 'delete']);
// News categories
Route::get('/admin/news/categories', [CategoryController::class, 'news_cat']);
Route::post('/admin/category/add', [CategoryController::class, 'add_cat']);
Route::get('/admin/category/delete/{id}', [CategoryController::class, 'delete_cat']);
Route::get('/admin/category/update/{id}', [CategoryController::class, 'update_cat']);
Route::post('/admin/category/update/{id}', [CategoryController::class, 'update_cat_']);
