<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\ProductController;



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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




 Route::middleware(['auth','isAdmin'])->group(function () {

    Route::get('/dashboard',[FrontendController::class, 'index']);
    Route::get('categories',[CategoryController::class, 'index']);
    Route::get('add-category',[CategoryController::class, 'add']);

    Route::post("insert-category",[CategoryController::class,'insert']);
    Route::get('edit-category/{id}',[CategoryController::class,'edit']);
    Route::get('update-category/{id}',[CategoryController::class,'update']);
    Route::get('delete-category/{id}',[CategoryController::class,'destroy']);


    Route::get('products',[ProductController::class,'index']);
    Route::get('add-product',[ProductController::class,'add']);
    Route::post('insert-product',[ProductController::class,'insert']);
 
    
 
 });