<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\AddCustomer;
use App\Http\Controllers\Customer;
use App\Http\Controllers\Categories;
use App\Http\Controllers\Products;
use App\Http\Controllers\Outdoors;
use App\Http\Controllers\Orders;
use App\Http\Controllers\Setting;
use App\Http\Controllers\AppConfig;



Route::get('/', function () {
    return view('index');
});

Route::resource('/category', CategoryController::class);

Route::get('/dashboard',[Dashboard::class ,'index'])->name('dashboard');
Route::get('/add_customer',[AddCustomer::class ,'index'])->name('addcustomer');
Route::get('/customers',[AddCustomer::class ,'index2'])->name('customers');
Route::post('/added_customer',[AddCustomer::class ,'store'])->name('customercontroller');
Route::get('add_category',[AddCustomer::class ,'index2'])->name('addcategory');
Route::get('categories',[Categories::class ,'index2'])->name('categories');
Route::get('add_product',[Products::class ,'index'])->name('addproduct');
Route::get('products',[Products::class ,'index2'])->name('products');
Route::get('add_outdoor',[Outdoors::class ,'index'])->name('addoutdoor');
Route::get('outdoors',[Outdoors::class ,'index2'])->name('outdoors');
Route::get('add_order',[Orders::class ,'index'])->name('addorder');
Route::get('orders',[Orders::class ,'index2'])->name('orders');
Route::get('add_user',[Setting::class ,'index'])->name('adduser');
Route::get('users',[Setting::class ,'index2'])->name('users');
Route::get('user_role',[Setting::class ,'index3'])->name('userrole');
Route::get('permissions',[Setting::class ,'index4'])->name('permissions');
Route::get('app_config',[AppConfig::class ,'index'])->name('appconfig');
Route::get('slider',[AppConfig::class ,'index2'])->name('slider');
Route::get('privecy_policy',[AppConfig::class ,'index3'])->name('privecy');
Route::get('about_page',[AppConfig::class ,'index4'])->name('about');
Route::get('customer/{id}/edit',[Customer::class ,'edit']);
Route::post('customer/{id}/update',[Customer::class ,'update']);
Route::get('customer/{id}/delete',[Customer::class ,'destroy']);
