<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke()
    {
        $title = 'Категории';
        $categories = Category::all();
        return view('backend.category.index',
            compact('title', 'categories'));
    }
}
