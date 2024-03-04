<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function __invoke()
    {
        $title = 'Тэги';
        $tags = Tag::all();
        return view('backend.tag.index',
            compact('title', 'tags'));
    }
}
