<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);
        $post = Post::create(
            [
                'title'       => $data['title'],
                'slug'        => $data['slug'],
                'category_id' => $data['category'],
                'description' => $data['description'],
                'image'       => $data['image'],
                'content'     => $data['content'],
            ]
        );
        if ($request->has('tags')) {
            $post->tags()->attach($request->tags);
        }
        Session::flash('message', 'Post added successfully');

        return redirect(route('admin.post.index'));
    }
}
