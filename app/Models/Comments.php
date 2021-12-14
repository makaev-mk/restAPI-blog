<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'subject',
        'created_at'
    ];

    protected $hidden = [
        'updated_at',
        'article_id',
    ];
}
