<?php

namespace App\Http\Resources\Front;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'          => $this->resource->id,
            'title'       => $this->resource->title,
            'slug'        => $this->resource->slug,
            'image'       => $this->resource->image,
            'description' => $this->resource->description,
            'created_at'  => $this->resource->created_at,
        ];
    }
}
