<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;
use Illuminate\Support\Facades\DB;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        $page_title = 'Privacy & Policy';
        return view('admin.privacyPolicy.index', compact('page_title'));
    }

    public function create()
    {
        $page_title = 'Privacy & Policy';
        return view('admin.privacyPolicy.create', compact('page_title'));
    }

    public function store(Request $request)
    {
        $privacyPolicy = new PrivacyPolicy();
        $privacyPolicy->title = $request->title;
        $privacyPolicy->content = $request->content;
        $privacyPolicy->save();

        return redirect()->route('admin.privacyPolicy.index')->with('create_message', "Data created successfully");
    }

    public function edit()
    {
        $page_title = 'Privacy & Policy';
        $privacyPolicy = PrivacyPolicy::first();
        return view('admin.privacyPolicy.edit', compact('privacyPolicy', 'page_title'));
    }

    public function update(Request $request)
    {
        $privacyPolicy = PrivacyPolicy::first();
        $privacyPolicy->title = $request->title;
        $privacyPolicy->content = $request->content;
        $privacyPolicy->save();

        return redirect()->route('admin.privacyPolicy.index')->with('update_message', "Data updated successfully");
    }
    // seo setting function
    public function seo()
    {
        $page_title = 'Seo Setting';
        $data = DB::table('seos')->first();
        return view('admin.privacyPolicy.setting', compact('data', 'page_title'));
    }

    public function updateSeo(Request $request, $id)
    {
        $data = array();
        $data['meta_title'] = $request->meta_title;
        $data['meta_author'] = $request->meta_author;
        $data['meta_tag'] = $request->meta_tag;
        $data['meta_keywords'] = $request->meta_keywords;
        $data['meta_description'] = $request->meta_description;
        $data['google_site_verification'] = $request->google_site_verification;
        $data['google_analytics'] = $request->google_analytics;
        $data['google_adsence_code'] = $request->google_adsence_code;


        DB::table('seos')->where('id', $id)->update($data);
        return redirect()->route('admin.privacyPolicy.setting')->with('update_message', "Data updated successfully");
    }
}
