<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostsListController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $posts = Post::latest()->paginate(15);
        $categories = Category::withCount('posts')->get();
        return view('frontend.blog',compact('posts','categories'));
    }
}
