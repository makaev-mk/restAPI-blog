<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\ArticlesIdRequest;
use App\Http\Resources\ArticleResource;
use App\Models\Articles;

class ArticlesController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        return Articles::orderBy('id', 'desc')->take(6)->get();;
    }

    /**
     * @return Articles[]|\Illuminate\Database\Eloquent\Collection
     */
    public function listing()
    {
        return Articles::all();
    }

    /**
     * @param ArticlesIdRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addLike(ArticlesIdRequest $request): \Illuminate\Http\JsonResponse
    {
        $article = Articles::findOrFail($request['id']);
        $likes = $article->likes + 1;

        $article->update([
            'likes' => $likes
        ]);

        return response()->json([
            'success' => true,
            'likes' =>$likes
        ]);

    }

    /**
     * @param ArticlesIdRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addView(ArticlesIdRequest $request): \Illuminate\Http\JsonResponse
    {
        $article = Articles::findOrFail($request['id']);
        $views = $article->views + 1;

        $article->update([
            'likes' => $views
        ]);

        return response()->json([
            'success' => true,
            'views' => $views
        ]);
    }

    public function show($id)
    {
        $article = Articles::where('id', $id)->get();

        return  ArticleResource::collection($article);
    }
}
