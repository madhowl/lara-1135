<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $title = 'Список статей';
        $posts = Post::paginate(15);
        return view('backend.post.index',
            compact('title', 'posts'));
    }
}
