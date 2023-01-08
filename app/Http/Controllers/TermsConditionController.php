<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TermsCondition;

class TermsConditionController extends Controller
{
    public function index()
    {
        $page_title = 'Terms & Condition';
        return view('admin.termsCondition.index', compact('page_title'));
    }

    public function create()
    {
        $page_title = 'Terms & Condition';
        return view('admin.termsCondition.create', compact('page_title'));
    }

    public function store(Request $request)
    {
        $termsCondition = new TermsCondition();
        $termsCondition->title = $request->title;
        $termsCondition->content = $request->content;
        $termsCondition->save();

        return redirect()->route('admin.termsCondition.index')->with('create_message', "Data created successfully");
    }

    public function edit()
    {
        $page_title = 'Terms & Condition';
        $termsCondition = TermsCondition::first();
        return view('admin.termsCondition.edit', compact('termsCondition', 'page_title'));
    }

    public function update(Request $request)
    {
        $termsCondition = TermsCondition::first();
        $termsCondition->title = $request->title;
        $termsCondition->content = $request->content;
        $termsCondition->save();

        return redirect()->route('admin.termsCondition.index')->with('update_message', "Data updated successfully");
    }
}
