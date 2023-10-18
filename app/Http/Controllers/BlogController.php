<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required',
            'title' => 'required',
            'status' => 'required',
            'category' => 'required',
        ]);
        $input = $request->all();
        $input['slug'] = strtolower(str_replace('', '-', $request->slug));
        $input['created_by'] = $request->user()->id;
        $input['updated_by'] = $request->user()->id;
        Blog::create($input);
        return redirect()->route('blog')->with("success", "Blog created successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::findOrFail(decrypt($id));
        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'content' => 'required',
            'title' => 'required',
            'status' => 'required',
            'category' => 'required',
        ]);
        $input = $request->all();
        $input['slug'] = strtolower(str_replace('', '-', $request->slug));
        $input['updated_by'] = $request->user()->id;
        $blog = Blog::findOrFail($id);
        $blog->update($input);
        return redirect()->route('blog')->with("success", "Blog updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::findOrFail(decrypt($id))->delete();
        return redirect()->route('blog')->with("success", "Blog deleted successfully!");
    }

    public function getAllBlogs($category)
    {
        $title = 'Aurega Corporate Services - Blogs';
        $canonical_url = "https://www.auregacs.com/resources/blogs/" . $category;
        $meta_desc = "Aurega Corporate Services";
        $meta_keywords = "Blogs, Guides";
        $blogs = Blog::where('category', $category)->where('status', 1)->latest()->get();
        return view('blogs.index', compact('title', 'canonical_url', 'meta_desc', 'meta_keywords', 'blogs'));
    }
}
