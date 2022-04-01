<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogintampilanController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'logintampilan'
        ]);
    }



}
