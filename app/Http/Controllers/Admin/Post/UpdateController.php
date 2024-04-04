<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);
        $post->update($data);
        //dd($request->tags);
        if ($request->has('tags')) {
        }
            $post->tags()->sync($request->tags);
        Session::flash('message', 'Post updated successfully');
        return redirect(route('admin.post.index'));
    }
}
