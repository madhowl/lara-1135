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
        $posts = Post::with('tags')->addSelect(
            [
                'category_name' => Category::select('title')
                    ->whereColumn('category_id', 'categories.id'),
                'category_slug' => Category::select('slug')
                    ->whereColumn('category_id', 'categories.id'),
//                'tags' => Category::select('slug')
//                    ->whereColumn('category_id', 'categories.id'),
            ]
        )->latest()->paginate(15);
        //$posts = Post::with('tags')->paginate(10)->dd();
        return view('frontend.blog',compact('posts'));
    }
}
