<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Models\Blog;

class BlogController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(StoreBlogRequest $request)
    {
        $blog = new Blog();
        $blog->title = $request->blog_title;
        $blog->content = $request->blog_content;

        $blog->save();
        return redirect('/');
    }

    public function edit(Blog $blog)
    {

        return view('blogs.edit', compact('blog'));
    }

    public function update(StoreBlogRequest $request, $id)
    {
        Blog::where('id', $id)->update([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect('/blogs/show');
    }

    public function destroy(Blog $blog)
    {
        Blog::where('id', $blog->id)->delete();
        return redirect('/blogs/show');
    }

    public function show()
    {
        $blogs = Blog::all();
        return view('blogs.show', compact('blogs'));
    }




}
