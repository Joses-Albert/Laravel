<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $articleId)
    {
        $request->validate([
            'body' => 'required|string|max:255',
        ]);

        $comment = new Comment([
            'body' => $request->input('body'),
            'user_id' => auth()->id(),
            'article_id' => $articleId,
        ]);

        $comment->save();

        return redirect()->route('articles.show', $articleId)->with('success', 'Comment added successfully!');
    }
}
