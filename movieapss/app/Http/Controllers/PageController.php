<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function home()
    {
        return view('home', ['key' => 'home']);
    }
    public function movie()
    {
        $movie = Movie::orderBy('id', 'desc')->get();
        return view('movie', ['key' => 'movie', 'mv' => $movie]);
    }

    public function movieaddform()
    {
        return view('movieaddform', ['key' => 'movie']);
    }

    public function moviesave(Request $request)
    {
        if($request->hasFile('poster'))
        {
            $file_name = time().'-'.$request->file('poster')->getClientOriginalName();
            $path = $request->file('poster')->storeAs('poster', $file_name,'public');
        } else
        {
            $file_name = null;
            $path = null;
        }
        Movie::create([
            'imdb' => $request->imdb,
            'title' => $request->title,
            'genre' => $request->genre,
            'year' => $request->year,
            'description' => $request->description,
            'poster' => $file_name
        ]);
        return redirect('/movie');
    }

    public function movieeditform($id)
    {
        $movie = Movie::find($id);
        return view('movieeditform', ['key' => 'movie', 'mv' => $movie]);
    }

    public function movieupdate($id, Request $request)
    {
        $movie = Movie::find($id);
        $movie->imdb = $request->imdb;
        $movie->title = $request->title;
        $movie->genre = $request->genre;
        $movie->year = $request->year;
        $movie->description = $request->description;
        if($request->poster)
            {
                if($movie->poster)
                    {
                        Storage::disk('public')->delete('poster/'.$movie->poster);
                    }
                $file_name = time().'-'.$request->file('poster')->getClientOriginalName();
                $path = $request->file('poster')->storeAs('poster', $file_name,'public');
                $movie->poster = $file_name;
            }
            $movie->save();
            return redirect('/movie');
    }

    public function genre()
    {
        return view('genre', ['key' => 'genre']);
    }
}
