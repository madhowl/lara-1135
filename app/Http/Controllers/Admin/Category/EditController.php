<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class EditController extends Controller
{
    public function __invoke(Category $category)
    {
        $title = 'Редактирование Категории ID: '.$category->id;
        return view('backend.category.edit',
            compact('title', 'category'));
    }
}
