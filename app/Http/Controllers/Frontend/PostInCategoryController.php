<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class PostInCategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(string $slug)
    {
        $category = Category::where('slug', $slug)->first();
        $posts = $category->posts()->paginate(15);
        $categories = Category::withCount('posts')->get();
        return view('frontend.blog',compact('posts','categories'));
    }
}
