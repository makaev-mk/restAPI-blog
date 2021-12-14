<?php

namespace App\Http\Resources;

use App\Models\Articles;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     */
    public function toArray($request)
    {
        $comments = Articles::findOrFail($this->id)->comments;
        $tags = Articles::findOrFail($this->id)->tags;

        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'likes' => $this->likes,
            'views' => $this->views,
            'comments' => $comments,
            'tag' => $tags,
            'image' => $this->image,
            'created_at' => $this->created_at
        ];
    }
}
