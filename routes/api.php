<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('home', [\App\Http\Controllers\Api\V1\ArticlesController::class, 'index']);
Route::get('articles', [\App\Http\Controllers\Api\V1\ArticlesController::class, 'index']);
Route::get('articles/{id}', [\App\Http\Controllers\Api\V1\ArticlesController::class, 'show']);
Route::get('tags', [\App\Http\Controllers\Api\V1\ArticleTagController::class, 'index']);
Route::post('add-like', [\App\Http\Controllers\Api\V1\ArticlesController::class, 'addLike']);
Route::post('add-view', [\App\Http\Controllers\Api\V1\ArticlesController::class, 'addView']);
Route::post('add-comment', [\App\Http\Controllers\Api\V1\CommentsController::class, 'store']);
