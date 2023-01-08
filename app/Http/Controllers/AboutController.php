<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{

    public function index()
    {
        $page_title = 'About';
        return view('admin.about.index', compact('page_title'));
    }

    public function create()
    {
        $page_title = 'About';
        return view('admin.about.create', compact('page_title'));
    }

    public function store(Request $request)
    {
        $about = new About();
        $about->title = $request->title;
        $about->content = $request->content;
        $about->save();

        return redirect()->route('admin.about.index')->with('create_message', "Data created successfully");
    }

    public function edit()
    {
        $page_title = 'About';
        $about = About::first();
        return view('admin.about.edit', compact('about', 'page_title'));
    }

    public function update(Request $request)
    {
        $about = About::first();
        $about->title = $request->title;
        $about->content = $request->content;
        $about->save();

        return redirect()->route('admin.about.index')->with('update_message', "Data updated successfully");
    }
}
