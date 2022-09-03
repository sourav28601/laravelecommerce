<?php

use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ShopController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// AdminController

Route::get('admin/dashboard',[AdminController::class,'index']);


// Admin CategoryController

Route::get('/admin/category',[CategoryController::class,'index']);
Route::post('/admin/category/save',[CategoryController::class,'save']);
Route::get('/admin/category/',[CategoryController::class,'display']);
Route::get('/admin/category/edit/{id}',[CategoryController::class,'edit']);
Route::post('/admin/category/update',[CategoryController::class,'update']);
Route::get('/admin/category/delete/{id}',[CategoryController::class,'delete']);

// Admin ProductController

Route::get('/admin/product',[ProductController::class,'index']);
Route::post('/admin/product/save',[ProductController::class,'save']);
Route::get('/admin/product/',[ProductController::class,'display']);
Route::get('/admin/product/edit/{id}',[ProductController::class,'edit']);
Route::post('/admin/product/update',[ProductController::class,'update']);
Route::get('/admin/product/delete/{id}',[ProductController::class,'delete']);


Route::get('shop/{category_url}?sort=DESC',[ShopController::class,'products']);
Route::get('shop/{category_url}?sort=ASC',[ShopController::class,'products']);




// Admin SliderController
Route::get('/admin/slider',[SliderController::class,'index']);
Route::post('/admin/slider/save',[SliderController::class,'save']);
Route::get('/admin/slider/',[SliderController::class,'display']);
Route::get('/admin/slider/edit/{id}',[SliderController::class,'edit']);
Route::post('/admin/slider/update',[SliderController::class,'update']);
Route::get('/admin/slider/delete/{id}',[SliderController::class,'delete']);

// Admin CuponController
Route::get('/admin/coupon',[CouponController::class,'index']);
Route::post('/admin/coupon_insert',[CouponController::class,'coupon_insert']);
Route::get('/admin/coupon/',[CouponController::class,'display']);




// FrontController
Route::get('/',[FrontController::class,'index']);
Route::get('/product_detail/{id}',[FrontController::class,'product_detail']);
Route::get('/category_detail/{id}',[FrontController::class,'category_detail']);
Route::post('/cart',[FrontController::class,'cart']);
Route::match(['get','post'],'/add_to_cart',[FrontController::class,'add_to_cart']);
Route::get('/cart/delete/{id}',[FrontController::class,'delete']);



//COUPON
Route::post('/coupon',[FrontController::class,'coupon']);

//search FrontController
Route::get('/search',[FrontController::class,'search']);


Route::post('/place_order',[FrontController::class,'place_order']);
Route::get('/thanks',[FrontController::class,'thanks']);
Route::get('/my_order',[FrontController::class,'my_order']);
Route::get('/my_account',[FrontController::class,'my_account']);
Route::get('/change_password',[FrontController::class,'change_password']);
Route::post('/update_password',[FrontController::class,'update_password']);
// Route::get('/change_address',[FrontController::class,'change_address']);


//UserController

Route::get('login',[UserController::class,'login']);
Route::post('/user_insert',[UserController::class,'user_insert']);
Route::post('/login_verification',[UserController::class,'login_verification']);
Route::get('/logout',[UserController::class,'logout']);

//checkout

Route::get('/checkout',[FrontController::class,'checkout']);

//Sort By
Route::get('products/{category_id}',[FrontController::class,'category_detail']);

//Login with Socialite Routes
Route::get('login/{service}',[SocialiteController::class,'redirectToProvider']);
Route::get('login/{service}/callback',[SocialiteController::class,'handleProviderCallback']);



Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

//paytm route
Route::post('/paytm-callback',[FrontController::class,'paytmCallback']);





