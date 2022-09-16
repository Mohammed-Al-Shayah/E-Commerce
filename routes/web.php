<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::prefix(LaravelLocalization::setLocale())->group(function ()
{
    Route::prefix('admin')->name('admin.')->middleware('auth','user_type')->group(function()
    {
        Route::get('/',[adminController::class,'index'])->name('index');
         Route::resource('categories',CategoryController::class);
         Route::resource('Products',ProductController::class);
         Route::get('delete-image/{id}',[ProductController::class,'delete_image'])->name('products.delete_image');
    });
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('no-access','no_access');
