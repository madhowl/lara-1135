<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Category $category)
    {
        $title = 'Категория ID:'.$category->id;
        return view('backend.category.show',
            compact('title', 'category'));
    }
}
