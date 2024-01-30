<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class SinglePostController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(string $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $categories = Category::withCount('posts')->get();
        return view('frontend.blog-single',compact('post','categories'));
    }
}
