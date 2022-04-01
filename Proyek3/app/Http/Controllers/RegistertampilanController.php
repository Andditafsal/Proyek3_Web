<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistertampilanController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'registertampilan'
        ]);
    }

    public function store(Request $request)
    {
       $request->validate([
           'nama' => 'required|max:255',
           'username' => ['required', 'min:3', 'max:255', 'unique:users'],
           'email' => 'required|email|unique:users',
           'password' => 'required|min:8|max:255'
       ]);

       dd('registrasi berhasil');
    }
}
