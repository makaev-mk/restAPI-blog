<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\ArticleTags;
use Illuminate\Http\Request;

class ArticleTagController extends Controller
{
    /**
     * @return ArticleTags[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return ArticleTags::all();
    }
}
