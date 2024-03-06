<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CreateController extends Controller
{
    public function __invoke()
    {
        $title = 'Добавить новую категорию';
        return view('backend.category.create',
            compact('title', ));
    }
}
