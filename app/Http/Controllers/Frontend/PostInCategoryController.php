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

        $posts = $category->posts()->addSelect(
            [
                'category_name' => Category::select('title')
                    ->whereColumn('category_id', 'categories.id'),
            ]
        )->latest()->paginate(15);

        return view('frontend.blog', compact('posts'));
    }
}
