<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogicController extends Controller
{
    public function show(){
        $isLoggedIn = true;
        $users = [
            ['name' => 'Lepi', 'role' => 'OG'],
            ['name' => 'Imam', 'role' => 'Under OG'],
            ['name' => 'Ilham', 'role' => 'Presiden'],
        ];
        $products = [];
        $profile = [
            'name' => 'Lepi',
            'email' => 'aauliafahlefi@gmail.com'
        ];
        $status = 'active';

        return view('logic', compact('isLoggedIn', 'users', 'products', 'profile', 'status'));
    }
}
