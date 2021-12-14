<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentRequest $request)
    {
        try {
            $comment = new Comments;
            $comment->article_id = $request['article_id'];
            $comment->subject = $request['subject'];
            $comment->body = $request['body'];
            $comment->save();

            return response()->json([
                'success' => true
            ]);
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

    }
}
