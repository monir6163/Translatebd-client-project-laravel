<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{

    public function index()
    {
        $page_title = 'Blog';
        $blogs = Blog::simplePaginate(10);
        return view('admin.blog.index', compact('page_title', 'blogs'));
    }

    public function create()
    {
        $page_title = 'Blog';
        return view('admin.blog.create', compact('page_title'));
    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();

        return redirect()->route('admin.blog.index')->with('create_message', "Data created successfully");
    }

    public function upload(Request $request)
    {

        if ($request->hasFile('upload')) {
            $orginalName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($orginalName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName .= $fileName . '_' . time() . '.' . $extension;
            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        };
    }

    public function edit($id)
    {
        $page_title = 'Blog';
        $blog = Blog::find($id);
        return view('admin.blog.edit', compact('blog', 'page_title'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();

        return redirect()->route('admin.blog.index')->with('update_message', "Data updated successfully");
    }
    
    public function delete($id)
    {
        Blog::find($id)->delete();
        return redirect()->route('admin.blog.index')->with('delete_message', 'Data Deleted Successfully.');
    }
}
