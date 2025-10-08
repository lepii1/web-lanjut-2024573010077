<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DasarBladeController extends Controller
{
    public function showData(){
        $name = 'Lepi';
        $fruits = ['apel', 'pisang', 'ceri'];
        $user = [
            'name' => 'Lepi',
            'email' => 'aauliafahlefi@gmail.com',
            'is_active' => true,
        ];
        $product = (object)[
            'id' => 1,
            'name' => 'Laptop',
            'price' => 50000
        ];

        return view('dasar', compact('name', 'fruits', 'user', 'product'));
    }
}
