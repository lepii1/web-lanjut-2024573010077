<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function admin()
    {
        $role = 'admin';
        $username =  'Lepi';
        return view('admin.dashboard', compact('role', 'username'));
    }

    public function user()
    {
        $role = 'user';
        $username =  'Jeli';
        return view('user.dashboard', compact('role', 'username'));
    }
}
