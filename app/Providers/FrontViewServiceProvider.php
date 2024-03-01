<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class FrontViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //$categories = Category::withCount('posts')->get();
        View::composer('frontend.partials.sidebar',function ($view){
            $view->with('categories', Category::withCount('posts')->get());
            $view->with('recent_posts', Post::latest()->limit(5)->get());
            $view->with('tags', Tag::withCount('posts')->get());
        });
    }
}
