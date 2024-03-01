<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class Index extends Controller
{
    public function __invoke()
    {
        $title = 'Тэги';
        $message = [];
        $tags = Tag::all();
        return view('backend.tag.index',
            compact('title', 'tags', 'message'));
    }
}
