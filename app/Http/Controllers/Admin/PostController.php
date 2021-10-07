<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.post.index', [
            'funfact' => Post::where('category', 'Fun Facts')->latest()->get(),
            'seize' => Post::where('category', 'Seize Your Sunday')->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
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
            'title'         => 'required|max:191',
            'image'         => 'required',
            'image.*'       => 'mimes:jpg,png,jpeg|max:2048',
            'link'          => 'nullable|max:191|url',
            'category'      => 'required'
        ]);
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        if ($request->hasfile('image')) {
            $images = $request->file('image');

            $uploaded = [];
            $index = 1;
            foreach ($images as $image) {
                $newImageName = $slug . '-slide' . $index . '.' . $image->extension();
                $index++;

                $image->move(public_path('img/post'), $newImageName);
                $uploaded[] = $newImageName;
            }

            $validated['image'] = implode(';', $uploaded);
            $validated['slug'] = $slug;

            Post::create($validated);
        }

        return redirect('/dashboard/post')->with('message', "New post has been created!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $images = explode(';', $post->image);

        foreach ($images as $image) {
            unlink(public_path("img/post/$image"));
        }

        $post->delete();

        return redirect('/dashboard/post')->with('message', "The post has been deleted!");
    }
}
