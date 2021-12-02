<?php

namespace App\Http\Controllers;

use App\Models\Myarticle;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Carbon\Carbon;
use Path\To\DOMDocument;
use Intervention\Image\ImageManagerStatic as Image;

class MyarticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main.myarticle.index', [
            'articles'  => Myarticle::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main.myarticle.create');
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
            'image'         => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);
        $slug = SlugService::createSlug(Myarticle::class, 'slug', $request->title);

        $newImageName = uniqid() . '-' . $slug . '.' . $request->image->extension();
        $validated['image'] = $newImageName;
        $validated['slug'] = $slug;
        $validated['user_id'] = auth()->user()->id;

        // Summernote Upload image inside Body
        $storage = "img/article/content";
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $group);
                $mimetype = $group['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filepath = ("$storage/$fileNameContentRand.$mimetype");
                $image = Image::make($src)
                    ->encode($mimetype, 100)
                    ->save(public_path($filepath));
                $new_src = asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-fluid w-auto');
            }
        }
        $validated['body'] = $dom->saveHTML();
        // End of Upload Image

        $request->image->move(public_path('img/article'), $newImageName);

        Myarticle::create($validated);

        return redirect('/myarticle')->with('message', 'You have created a new article! Please wait for reviewing your article.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Myarticle  $myarticle
     * @return \Illuminate\Http\Response
     */
    public function show(Myarticle $myarticle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Myarticle  $myarticle
     * @return \Illuminate\Http\Response
     */
    public function edit(Myarticle $myarticle)
    {
        return view('main.myarticle.edit', compact('myarticle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Myarticle  $myarticle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Myarticle $myarticle)
    {
        $validated = $request->validate([
            'title'         => 'required',
            'description'   => 'required',
            'body'          => 'required'
        ]);

        if ($request->title != $myarticle->title) {
            $slug = SlugService::createSlug(Myarticle::class, 'slug', $request->title);
            $validated['slug'] = $slug;
        } else {
            $slug = $myarticle->slug;
        }

        if ($request->image) {
            unlink(public_path("img/article/$myarticle->image"));
            $newImageName = uniqid() . '-' . $slug . '.' . $request->image->extension();

            $validated['image'] = $newImageName;
            $request->image->move(public_path('img/article'), $newImageName);
        }

        // Summernote Upload image inside Body
        $storage = "img/article/content";
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $group);
                $mimetype = $group['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filepath = ("$storage/$fileNameContentRand.$mimetype");
                $image = Image::make($src)
                    ->encode($mimetype, 100)
                    ->save(public_path($filepath));
                $new_src = asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-fluid w-auto');
            }
        }
        $validated['published_at'] = null;
        $validated['body'] = $dom->saveHTML();
        // End of Upload Image

        $myarticle->update($validated);

        return redirect('/myarticle')->with('message', 'You have edited your article! Please wait for reviewing your article.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Myarticle  $myarticle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Myarticle $myarticle)
    {
        $myarticle->delete();
        unlink(public_path("img/article/$myarticle->image"));

        return redirect('/myarticle');
    }
}
