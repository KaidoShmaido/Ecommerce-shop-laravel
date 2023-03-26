<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\CategoryController;


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
    Route::get('edit-product/{id}',[CategoryController::class,'edit']);
 
 });