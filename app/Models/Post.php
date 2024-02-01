<?php

namespace App\Models;

use App\Events\PostShow;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = false;

    protected $dispatchesEvents = [
        //show'=> PostShow::class,
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
