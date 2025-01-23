<?php

namespace Jasanya\BlogSystem\Controllers;

use Jasanya\BlogSystem\Models\Blog;
use Illuminate\Http\Request;

class BlogController
{
    public function index()
    {
        $blogs = Blog::where('active', true)->get();
        return view('blog.index', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blog.show', compact('blog'));
    }
}
