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
//admin
Route::prefix('admin')->group(function (){
// products categories
    Route::get('categorys', [BECategoryCotroller::class, 'index']);
    Route::post('category/save', [BECategoryCotroller::class, 'save']);
    Route::post('category/delete', [BECategoryCotroller::class, 'delete']);
    Route::post('category/update', [BECategoryCotroller::class, 'update']);
    Route::get('category/changeStatus/{id}', [BECategoryCotroller::class, 'change_status']);

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
