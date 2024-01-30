<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\CategoryController;

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

Route::get('/',IndexController::class)->name('home');
Route::get('/post',[PostController::class, 'index'])->name('post.index');
Route::resource('/category',\App\Http\Controllers\CategoryController::class)
    ->parameters(['categories' => 'category:slug',]);
;

