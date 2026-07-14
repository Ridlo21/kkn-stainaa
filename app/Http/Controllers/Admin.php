<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        return view('admin.halaman_utama.dashboard', compact('title'));
    }
}
