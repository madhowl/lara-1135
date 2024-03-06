<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Session;

class DestroyController extends Controller
{
    public function __invoke(Post $post)
    {
        $post->delete();
        Session::flash('message', 'Post deleted successfully');
        return redirect(route('admin.post.index'));
    }
}
