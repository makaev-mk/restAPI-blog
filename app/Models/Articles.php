<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    protected $fillable = [
        'likes',
        'views'
    ];

    public function comments()
    {
        return $this->hasMany(Comments::class, 'article_id');
    }

    public function tags()
    {
        return $this->hasMany(ArticleTags::class, 'article_id');
    }
}
