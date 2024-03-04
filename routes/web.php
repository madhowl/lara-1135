<?php

use App\Http\Controllers\Admin\Tag\CreateController;
use App\Http\Controllers\Admin\Tag\DestroyController;
use App\Http\Controllers\Admin\Tag\EditController;
use App\Http\Controllers\Admin\Tag\IndexController;
use App\Http\Controllers\Admin\Tag\ShowController;
use App\Http\Controllers\Admin\Tag\StoreController;
use App\Http\Controllers\Admin\Tag\UpdateController;
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
    Route::prefix('/tags')->group(function () {
        Route::get('/', IndexController::class)->name('admin.tag.index');
        Route::get('/create', CreateController::class)->name('admin.tag.create');
        Route::get('/show/{tag}', ShowController::class)->name('admin.tag.show');
        Route::post('/store', StoreController::class)->name('admin.tag.store');
        Route::get('/edit/{tag}', EditController::class)->name('admin.tag.edit');
        Route::delete('/delete/{tag}', DestroyController::class)->name('admin.tag.delete');
        Route::patch('/update/{tag}', UpdateController::class)->name('admin.tag.update');
    });
})->middleware('auth');
