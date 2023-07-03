<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('Dashboard');
    }
    public function tentang_saya()
    {
        return view('tentang_saya');
    }
}
