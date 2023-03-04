<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use \App\Http\Controllers\BECategoryCotroller;
use \App\Http\Controllers\BEBrandsController;
use \App\Http\Controllers\BEProductController;
use \App\Http\Controllers\BEProductCommentController;
use \App\Http\Controllers\BEProductAttributeController;
use \App\Http\Controllers\BEUserController;


use App\Http\Livewire\Admin\RoleComponent;
use App\Http\Livewire\Admin\PermissionComponent;
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

//admin
Route::view('admin','admin.dashboard');


Route::prefix('admin')->group(function (){
//  categorys
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

    Route::get('/product/comments', [BEProductCommentController::class, 'index'])->name('product.comment');
    Route::post('/product/comments/delete', [BEProductCommentController::class, 'destroy'])->name('product.comment.destroy');

    //user
    Route::get('/user',[BEUserController::class, 'index'])->name('admin.user');
    Route::get('user/{id}/permission', [BEUserController::class,'permission'])->name('user.permission');
    Route::post('user/permission', [BEUserController::class,'permissionStore'])->name('user.permission.store');
    Route::post('/user',[BEUserController::class, 'destroy'])->name('admin.user.destroy');

    Route::get('/role', RoleComponent::class)->name('admin.user.role');
    Route::get('/permission', PermissionComponent::class)->name('admin.user.permission');
});
