<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIController extends Controller
{
    public function home(Request $request)
    {
        $theme = session('theme', 'light');
        $alertMessage = 'Selamat datang di Laravel UI Integreted Demo!';
        $features = [
            'Partial Views',
            'Blade Components',
            'Theme Switching',
            'Bootstrap 5',
            'Responsive Design',
        ];

        return view('home', compact('theme', 'alertMessage', 'features'));
    }

    public function about(Request $request)
    {
        $theme = session('theme', 'light');
        $alertMessage = 'Halaman ini menggunakan Partial Views!';
        $team = [
            ['name' => 'Lepi', 'role' => 'OG'],
            ['name' => 'Imam', 'role' => 'Under OG'],
            ['name' => 'Ilham', 'role' => 'President'],
        ];

        return view('about', compact('theme', 'alertMessage', 'team'));
    }

    public function contact(Request $request)
    {
        $theme = session('theme', 'light');
        $departments = [
            'Teknik Informatika',
            'Teknik Elektro',
            'Teknik Mesin',
        ];

        return view('contact', compact('theme', 'departments'));
    }

    public function profile(Request $request)
    {
        $theme = session('theme', 'light');
        $user = [
            'name' =>  'Lepi',
            'email' => 'aauliafahlefi@gmail.com',
            'join-date' => '2025-06-10',
            'preferences' => ['Email Notifications', 'Dark Mode', 'Newsletter']
        ];

        return view('profile', compact('theme', 'user'));
    }

    public function switchTheme(Request $request, $theme)
    {
        if (in_array($theme, ['light', 'dark'])) {
            session(['theme' => $theme]);
        }
        return back();
    }
}
