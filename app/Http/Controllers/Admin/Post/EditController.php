<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke(Post $post)
    {
        $title = 'Редактирование Стати ID: '.$post->id;
        $categories = Category::all();
        $tags = Tag::all();
//        $a=$post->tags()->pluck('name','id');
//        $a->each(function ($item, $key) {
//            echo ($key == 4) ? "Нашёл " :  "no";
//});die;
        return view('backend.post.edit',
            compact('title', 'post', 'categories', 'tags'));
    }
}
