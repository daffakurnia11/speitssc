<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Carbon\Carbon;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.article.myarticle', [
            'articles'  => Article::where('user_id', auth()->user()->id)->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'         => 'required',
            'description'   => 'required',
            'body'          => 'required',
            'image'         => 'required|mimes:jpg,png,jpeg|max:5048',
            'category'      => 'required'
        ]);
        $slug = SlugService::createSlug(Article::class, 'slug', $request->title);

        if ($request->publish) {
            $validated['published_at'] = Carbon::now();
        }

        $newImageName = uniqid() . '-' . $slug . '.' . $request->image->extension();
        $validated['image'] = $newImageName;
        $validated['slug'] = $slug;
        $validated['user_id'] = auth()->user()->id;

        $request->image->move(public_path('img/article'), $newImageName);

        Article::create($validated);

        return redirect('/dashboard/article')->with('message', "New article has been created!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('admin.article.show', [
            'article'   => $article
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('admin.article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title'         => 'required',
            'description'   => 'required',
            'body'          => 'required',
            'category'      => 'required'
        ]);

        if ($request->title != $article->title) {
            $slug = SlugService::createSlug(Article::class, 'slug', $request->title);
            $validated['slug'] = $slug;
        } else {
            $slug = $article->slug;
        }

        if ($request->image) {
            unlink(public_path("img/article/$article->image"));
            $newImageName = uniqid() . '-' . $slug . '.' . $request->image->extension();

            $validated['image'] = $newImageName;
            $request->image->move(public_path('img/article'), $newImageName);
        }

        if ($request->publish) {
            $validated['published_at'] = Carbon::now();
        } else {
            $validated['published_at'] = null;
        }

        $article->update($validated);

        return redirect('/dashboard/article')->with('message', "The article has been updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        unlink(public_path("img/article/$article->image"));

        return redirect('/dashboard/article')->with('message', "The article has been deleted!");
    }

    public function all()
    {
        return view('admin.article.allarticles', [
            'articles'  => Article::latest()->get()
        ]);
    }

    public function publish(Article $article)
    {
        $date = Carbon::now();
        $publishDate['published_at'] = $date;

        $article->update($publishDate);

        return redirect('/dashboard/article')->with('message', "The article has been published!");
    }
}
