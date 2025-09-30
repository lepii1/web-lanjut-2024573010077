<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $message = "Selamat Datang di homepage Pren";
        return view('pages.home', compact('message'));
    }

    public function about()
    {
        $message = "Ini tentang situs ini Pren";
        return view('pages.about', compact('message'));
    }

    public function contact()
    {
        $message = "Hubungi kami melalui halaman kontak dibawah ya pren.";
        return view('pages.contact', compact('message'));
    }
}
