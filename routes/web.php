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
Auth::routes();

Route::get('/', PostsListController::class)->name('home');
//Route::get('/home', PostsListController::class)->name('home');
Route::get('/category/{slug}', PostInCategoryController::class)->name('category');
Route::get('/post/{slug}', SinglePostController::class)->name('post');
Route::get('/tag/{tag:slug}', PostInTagController::class)->name('tag');
Route::get('/post', [PostController::class, 'index'])->name('post.index');




Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::middleware('auth')->prefix('/admin')->group(function () {
    Route::get('/', DashboardController::class)->name('admin.index');
    Route::post('/logout', LogoutController::class)->name('admin.logout');
    Route::prefix('/tag')->namespace('App\Http\Controllers\Admin\Tag')->group(function () {
        Route::get('/', IndexController::class)->name('admin.tag.index');
        Route::get('/create', CreateController::class)->name('admin.tag.create');
        Route::get('/show/{tag}', ShowController::class)->name('admin.tag.show');
        Route::post('/store', StoreController::class)->name('admin.tag.store');
        Route::get('/edit/{tag}', EditController::class)->name('admin.tag.edit');
        Route::delete('/delete/{tag}', DestroyController::class)->name('admin.tag.delete');
        Route::patch('/update/{tag}', UpdateController::class)->name('admin.tag.update');
    });
    Route::prefix('/category')->namespace('App\Http\Controllers\Admin\Category')->group(function () {
        Route::get('/', IndexController::class)->name('admin.category.index');
        Route::get('/create', CreateController::class)->name('admin.category.create');
        Route::get('/show/{category}', ShowController::class)->name('admin.category.show');
        Route::post('/store', StoreController::class)->name('admin.category.store');
        Route::get('/edit/{category}', EditController::class)->name('admin.category.edit');
        Route::delete('/delete/{category}', DestroyController::class)->name('admin.category.delete');
        Route::patch('/update/{category}', UpdateController::class)->name('admin.category.update');
    });
    Route::prefix('/post')->namespace('App\Http\Controllers\Admin\Post')->group(function () {
        Route::get('/', IndexController::class)->name('admin.post.index');
        Route::get('/create', CreateController::class)->name('admin.post.create');
        Route::get('/show/{post}', ShowController::class)->name('admin.post.show');
        Route::post('/store', StoreController::class)->name('admin.post.store');
        Route::get('/edit/{post}', EditController::class)->name('admin.post.edit');
        Route::delete('/delete/{post}', DestroyController::class)->name('admin.post.delete');
        Route::patch('/update/{post}', UpdateController::class)->name('admin.post.update');
    });
});
