<?php

namespace App\Http\Controllers\Frontend;

use App\Events\PostShow;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class SinglePostController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(string $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        PostShow::dispatch($post);
        $readingTime = $post->calculateReadingTime($post->content);
        return view('frontend.blog-single',compact('post','readingTime'));
    }
}
