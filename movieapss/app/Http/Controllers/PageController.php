<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie; 

class PageController extends Controller
{
    public function home()
    {
        return view('home', ['key' => 'home']);
    }
    public function movie()
    {
        $movie = Movie::all();
        return view('movie', ['key' => 'movie', 'mv' => $movie]);
    }

    public function movieaddform()
    {
        return view('movieaddform', ['key' => 'movie']);
    }
    public function genre()
    {
        return view('genre', ['key' => 'genre']);
    }
}
