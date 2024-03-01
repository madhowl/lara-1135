<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class Edit extends Controller
{
    public function __invoke(Tag $tag)
    {
        $title = 'Тэги';
        $message = [];
        dd($tag);
        return view('backend.tag.create',
            compact('title', 'tags', 'message'));
    }
}
