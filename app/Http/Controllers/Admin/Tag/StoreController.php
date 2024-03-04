<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreRequest;
use App\Models\Tag;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['name']);
        Tag::firstOrCreate($data);
        Session::flash('message', 'Tag added successfully');
        return redirect(route('admin.tag.index'));
    }
}
