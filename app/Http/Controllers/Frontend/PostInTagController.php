<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostInTagController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Tag $tag)
    {
        $posts = $tag->posts()->addSelect(
            [
                'category_name' => Category::select('title')
                    ->whereColumn('category_id', 'categories.id'),
                'category_slug' => Category::select('slug')
                    ->whereColumn('category_id', 'categories.id'),
            ]
        )->latest()->paginate(15);
        return view('frontend.blog',compact('posts'));
    }
}
