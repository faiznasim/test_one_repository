<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Admin.dashboard1');
    }

    public function index2()
    {
        return view('Admin.dashboard2');
    }

    public function starter()
    {
        return view('Admin.starter');
    }
}
