<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard()
    {
        $page_title = 'Dashboard';
        return view('admin.dashboard', compact('page_title'));
    }
}
