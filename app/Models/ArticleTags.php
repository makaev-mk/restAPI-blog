<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleTags extends Model
{
    use HasFactory;

    protected $fillable = [
        'label'
    ];

    protected $hidden = [
        'article_id',
        'created_at',
        'updated_at'
    ];
}
