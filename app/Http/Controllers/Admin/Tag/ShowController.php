<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $title = 'Тэг ID:'.$tag->id;
        return view('backend.tag.show',
            compact('title', 'tag'));
    }
}
