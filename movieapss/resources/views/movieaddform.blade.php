@extends('layouts.main')
@section('title', 'Movie')
@section('content')
  <div class="card">
    <div class="card-header"></div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="imdb">Imdb</label>
                <input type="text" name="imdb" class="form-control" id="imdb" required>
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" required>
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <select name="genre" id="genre" class="form-control">
                    <option value="0" hidden>--Pilih Genre--</option>
                    <option value="Action">Action</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Drama">Drama</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Horror">Horror</option>
                    <option value="Mystery">Mystery</option>
                    <option value="Romance">Romance</option>
                    <option value="Sci-fi">Sci-fi</option>
                    <option value="Thriller">Thriller</option>
                </select>
            </div>
            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" min="1900" max="2025" name="year" id="year" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="poster">Poster</label>
                <input type="file" name="poster" id="poster" accept="image/" class="form-control" required>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
  </div>
@endsection