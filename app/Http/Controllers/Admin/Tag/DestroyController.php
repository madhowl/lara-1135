<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreRequest;
use App\Models\Tag;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class DestroyController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $tag->delete();
        Session::flash('message', 'Tag deleted successfully');
        return redirect(route('admin.tag.index'));
    }
}
