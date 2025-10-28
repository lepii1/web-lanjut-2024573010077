<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Laravel\Prompts\password;

class RegisterController extends Controller
{
    public function showForm(){
        return view('register');
    }

    public function handleForm(Request $request){
        $customMessages = [
            'name.required' => 'Namae Sopo?',
            'email.required' => 'Emaile Sopo?',
            'email.email' => 'koyo dudu email koe iki',
            'password.required' => 'ojo lali kata sandie',
            'password.min' => 'Kata Sandi e kudu :min karakter',
            'username.regex' => 'Username nyo kudu pake huruf dan angka',
        ];

        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'username' => ['required', 'regex:/^[a-zA-Z0-9_]+$/'],
            'password' => 'required|min:6',
        ], $customMessages);

        return redirect()->route('register.show')->with('success', 'Register Berhasil');
    }
}
