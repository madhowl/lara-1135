<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Frontend\PostsListController;
use App\Http\Controllers\Frontend\PostInCategoryController;
use \App\Http\Controllers\Frontend\SinglePostController;
use \App\Http\Controllers\Backend\AdminController;

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
Route::get('home', PostsListController::class)->name('home');
Route::get('/category/{slug}', PostInCategoryController::class)->name('category');
Route::get('/post/{slug}', SinglePostController::class)->name('post');
Route::get('/post',[PostController::class, 'index'])->name('post.index');






Auth::routes();
Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
});
