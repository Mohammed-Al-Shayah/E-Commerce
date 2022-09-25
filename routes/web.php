<?php

use App\Models\Slider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::prefix(LaravelLocalization::setLocale())->group(function ()
{
    Route::prefix('admin')->name('admin.')->middleware('auth','user_type')->group(function()
    {
        Route::get('/',[adminController::class,'index'])->name('index');
         Route::resource('categories',CategoryController::class);
         Route::resource('Products',ProductController::class);
         Route::get('delete-image/{id}',[ProductController::class,'delete_image'])->name('products.delete_image');
         Route::resource('slider',SliderController::class);

    });



    Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('no-access','no_access');

//Routes site
Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/categories', [SiteController::class, 'categories'])->name('site.categories');
Route::get('/product', [SiteController::class, 'product'])->name('site.product');
Route::get('/cart', [SiteController::class, 'cart'])->name('site.cart');
Route::get('/checkOut', [SiteController::class, 'checkOut'])->name('site.checkOut');
Route::get('/contact', [SiteController::class, 'contact'])->name('site.contact');


});


