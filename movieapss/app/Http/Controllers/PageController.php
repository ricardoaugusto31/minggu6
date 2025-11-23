<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\Movie;
use Illuminate\Support\Facades\Storage;
use App\User;

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
        return redirect('/movie')->with('alert', 'Data berhasil ditambahkan!');
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
            return redirect('/movie')->with('alert', 'Data berhasil diupdate!');
    }

    public function moviedelete($id)
    {
        $movie = Movie::find($id);
        if ($movie->poster)
            {
                Storage::disk('public')->delete('poster/'.$movie->poster);
            }
        $movie->delete();
        return redirect('/movie')->with('alert', 'Data berhasil dihapus!');
    }

    public function genre()
    {
        return view('genre', ['key' => 'genre']);
    }

    public function users()
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('users', ['key' => 'users', 'users' => $users]);
    }

    public function usersaddform()
    {
        return view('usersaddform', ['key' => 'users']);
    }

    public function userssave(Request $request)
    {
        if($request->hasFile('photo'))
        {
            $file_name = time().'-'.$request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('photo', $file_name,'public');
        } else
        {
            $file_name = null;
            $path = null;
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'photo' => $file_name
        ]);
        return redirect('/users')->with('alert', 'Data berhasil ditambahkan!');
    }

    public function usersdelete($id)
    {
        $user = User::find($id);
        if ($user->photo) {
            Storage::disk('public')->delete('photo/'.$user->photo);
        }
        $user->delete();
        return redirect('/users')->with('alert', 'Data berhasil dihapus!');
    }

}

