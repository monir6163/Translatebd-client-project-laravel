<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Translate;

class TranslateController extends Controller
{
    public function index()
    {
        $page_title = 'Translate';
        $translates = Translate::simplePaginate(10);
        return view('admin.translate.index', compact('page_title', 'translates'));
    }

    public function create($id)
    {
        $page_title = 'Translate';
        $translate = Translate::find($id);
        return view('admin.translate.create', compact('page_title', 'translate'));
    }

    public function store(Request $request)
    {
        $translate = new Translate();
        $translate->translate_type = strtolower($request->title);
        $translate->content = $request->content;
        $translate->save();

        return redirect()->route('admin.translate.index')->with('create_message', "Data created successfully");
    }

    public function edit($id)
    {
        $page_title = 'Translate';
        $translate = Translate::find($id);
        return view('admin.translate.edit', compact('translate', 'page_title'));
    }

    public function update(Request $request, $id)
    {
        $translate = Translate::find($id);
        $translate->translate_type = strtolower($request->title);
        $translate->content = $request->content;
        $translate->save();

        return redirect()->route('admin.translate.index')->with('update_message', "Data updated successfully");
    }
}
