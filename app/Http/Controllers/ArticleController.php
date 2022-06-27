<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticleRequest;
use App\Models\Article;
use App\Traits\ImageTrait;

class ArticleController extends Controller
{
    use ImageTrait;

    /**
     * Create Page
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store Article ( hint delete all last articles )
     */
    public function store(CreateArticleRequest $request)
    {
        $images = $this->generateImages($request->image, 'articles');

        Article::truncate();

        Article::create([
            'title'  => $request->title,
            'body'  => $request->body,
            'image1' => $images[0],
            'image2' => $images[1],
            'image3' => $images[2],
        ]);

        return redirect(route('articles.show'));
    }

    public function show()
    {
        $article = Article::first();

        if ($article == null) {
            return redirect(route('articles.create'));
        }

        return view('show', compact('article'));
    }
}