<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//2
class PageController extends Controller
{
    public function home()
    {
        return view('home', ['key' => 'home']);
    }
    public function movie()
    {
        return view('movie', ['key' => 'movie']);
    }
    public function genre()
    {
        return view('genre', ['key' => 'genre']);
    }
}
