<?php

use App\Http\Controllers\Frontend\PostInTagController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Frontend\PostsListController;
use App\Http\Controllers\Frontend\PostInCategoryController;
use App\Http\Controllers\Frontend\SinglePostController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LogoutController;

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
Route::get('/home', PostsListController::class)->name('home');
Route::get('/category/{slug}', PostInCategoryController::class)->name('category');
Route::get('/post/{slug}', SinglePostController::class)->name('post');
Route::get('/tag/{tag:slug}', PostInTagController::class)->name('tag');
Route::get('/post', [PostController::class, 'index'])->name('post.index');


Auth::routes();
Route::prefix('/admin')->group(function () {
    Route::get('/', DashboardController::class)->name('admin.index');
    Route::get('/logout', LogoutController::class)->name('admin.logout');
    Route::prefix('/tag')->group(function () {
        Route::get('/', App\Http\Controllers\Admin\Tag\IndexController::class)->name('admin.tag.index');
        Route::get('/create', App\Http\Controllers\Admin\Tag\CreateController::class)->name('admin.tag.create');
        Route::get('/show/{tag}', App\Http\Controllers\Admin\Tag\ShowController::class)->name('admin.tag.show');
        Route::post('/store', App\Http\Controllers\Admin\Tag\StoreController::class)->name('admin.tag.store');
        Route::get('/edit/{tag}', App\Http\Controllers\Admin\Tag\EditController::class)->name('admin.tag.edit');
        Route::delete('/delete/{tag}', App\Http\Controllers\Admin\Tag\DestroyController::class)->name('admin.tag.delete');
        Route::patch('/update/{tag}', App\Http\Controllers\Admin\Tag\UpdateController::class)->name('admin.tag.update');
    });
    Route::prefix('/category')->group(function () {
        Route::get('/', App\Http\Controllers\Admin\Category\IndexController::class)->name('admin.category.index');
        Route::get('/create', App\Http\Controllers\Admin\Category\CreateController::class)->name('admin.category.create');
        Route::get('/show/{category}', App\Http\Controllers\Admin\Category\ShowController::class)->name('admin.category.show');
        Route::post('/store', App\Http\Controllers\Admin\Category\StoreController::class)->name('admin.category.store');
        Route::get('/edit/{category}', App\Http\Controllers\Admin\Category\EditController::class)->name('admin.category.edit');
        Route::delete('/delete/{category}', App\Http\Controllers\Admin\Category\DestroyController::class)->name('admin.category.delete');
        Route::patch('/update/{category}', App\Http\Controllers\Admin\Category\UpdateController::class)->name('admin.category.update');
    });
})->middleware('auth');
