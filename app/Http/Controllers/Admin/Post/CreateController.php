<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;

class CreateController extends Controller
{
    public function __invoke()
    {
        $title = 'Добавить новую статью';
        $categories = Category::all();
        $tags = Tag::all();
        return view('backend.post.create',
            compact('title', 'tags', 'categories'));
    }
}
