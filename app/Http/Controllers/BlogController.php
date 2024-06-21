<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Blog $blog)
    {
        $blogs = $blog->all();
        return view('Blog.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:blogs,title',
            'desc' => 'required'
        ]);

        Blog::create($request->all());

        return redirect()->route('blog.index')->with('success', 'Blog berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('Blog.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('Blog.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required|unique:blogs,title',
            'desc' => 'required'
        ]);

        $blog = Blog::findOrFail($id);
        $blog->update($request->all());

        return redirect()->route('blog.index')->with('update', 'Blog berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blog.index')->with('destroy', 'Blog berhasil dihapus!');
    }
}
