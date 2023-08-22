<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AllProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Guest
Route::middleware('guest')->group(function (){
    Route::get('/',[HomeController::class,'redirect']);
    Route::get('login',[SessionController::class,'index']);
    Route::get('register',[SessionController::class,'register'])->name('register');
    Route::post('register',[SessionController::class,'store']);
    Route::post('login',[SessionController::class,'login'])->name('login');
});

// Both for Admin and User
Route::get('/home',[HomeController::class,'redirect'])->middleware('auth');
Route::get('allProducts',[AllProductController::class,'index'])->name('category');
Route::post('logout',[SessionController::class,'destroy'])->name('logout');

// Admin Dashboard
Route::middleware('can:admin')->group(function (){
    Route::get('dashboard',[HomeController::class,'index']);
    Route::get('product',[AdminController::class,'product']);
    // Product
    Route::get('product/create',[ProductController::class,'create']);
    Route::post('product/create',[ProductController::class,'store']);
    Route::get('products/{product}/edit',[ProductController::class,'edit']);
    Route::patch('products/{product}/edit',[ProductController::class,'update']);
    Route::delete('products/{product}',[ProductController::class,'destroy']);
    // Category
    Route::get('categories/create',[CategoryController::class,'create']);
    Route::post('categories/create',[CategoryController::class,'store']);
    Route::get('categories/{categorie}/edit',[CategoryController::class,'edit']);
    Route::patch('categories/{categorie}/edit',[CategoryController::class,'update']);
    Route::delete('categories/{categorie}',[CategoryController::class,'destroy']);
    // Account
    Route::get('accounts',[AdminController::class,'account']);
    Route::delete('accounts/{user}',[AdminController::class,'destroy']);
    Route::get('accounts/{user}/edit',[AdminController::class,'edit']);
    Route::patch('accounts/{user}/edit',[AdminController::class,'update']);

});

