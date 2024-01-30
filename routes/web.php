<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Frontend\PostsListController;
use App\Http\Controllers\Frontend\PostInCategoryController;
use \App\Http\Controllers\Frontend\SinglePostController;

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

Route::get('/', PostsListController::class)->name('home');
Route::get('/category/{slug}', PostInCategoryController::class)->name('category');
Route::get('/post/{slug}', SinglePostController::class)->name('post');
Route::get('/post',[PostController::class, 'index'])->name('post.index');
//Route::resource('/category',\App\Http\Controllers\CategoryController::class)->parameters(['categories' => 'category:slug',]);
;

