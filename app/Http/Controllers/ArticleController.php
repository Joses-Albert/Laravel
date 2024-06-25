<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function showArticle($id)
    {
        $article = Article::findOrFail($id);
        $comments = $article->comments()->with('user')->orderByDesc('created_at')->get();

        return view('articles.show', compact('article', 'comments'));
    }
}
