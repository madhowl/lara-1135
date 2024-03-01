<?php

use App\Http\Controllers\Admin\Tag\Create;
use App\Http\Controllers\Admin\Tag\Edit;
use App\Http\Controllers\Admin\Tag\Index;
use App\Http\Controllers\Admin\Tag\Store;
use App\Http\Controllers\Frontend\PostInTagController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Frontend\PostsListController;
use App\Http\Controllers\Frontend\PostInCategoryController;
use App\Http\Controllers\Frontend\SinglePostController;
use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\Logout;

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
    Route::get('/', Dashboard::class)->name('admin.index');
    Route::get('/logout', Logout::class)->name('admin.logout');
    Route::prefix('/tags')->group(function () {
        Route::get('/', Index::class)->name('admin.tag.index');
        Route::get('/create', Create::class)->name('admin.tag.create');
        Route::post('/store', Store::class)->name('admin.tag.store');
        Route::get('/edit/{tag}', Edit::class)->name('admin.tag.edit');
    });
})->middleware('auth');
