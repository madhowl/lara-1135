<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\UpdateRequest;
use App\Models\Tag;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Tag $tag)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['name']);
        $tag->update($data);
        Session::flash('message', 'Tag updated successfully');
        return redirect(route('admin.tag.index'));
    }
}
