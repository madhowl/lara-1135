<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Session;

class DestroyController extends Controller
{
    public function __invoke(Category $category)
    {
        $category->delete();
        Session::flash('message', 'Category deleted successfully');
        return redirect(route('admin.category.index'));
    }
}
