<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Authors;


class narendra064Controller extends Controller
{

    public function author()
    {
        return view('admin.authors');
    }

    public function news()
    {
        return view('admin.news');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function form()
    {
        return view('form');
    }

    public function kategori()
    {
        return view('kategori');
    }

    public function profile()
    {
        return view('profil');
    }
}
