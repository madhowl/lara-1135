<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class Create extends Controller
{
    public function __invoke()
    {
        $title = 'Тэги';
        $message = [];
        $tags = Tag::all();
        return view('backend.tag.create',
            compact('title', 'tags', 'message'));
    }
}
