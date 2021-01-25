<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Client\Request;


class ArticleController extends Controller
{
    public function index()
    {
        return Article::all();
    }

    public function show($id)
    {
        return Article::find($id);
    }

    public function store(Request $request)
    {
        $article = Article::create($request->only('name', 'color', 'price'));

        return response($article);
    }

    public function update($id, Request $request)
    {
        $article = Article::find($id);

        $article->update($request->only('name', 'price'));

        return response($article);
    }
}
