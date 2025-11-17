@extends('layouts.main')
@section('title', 'Movie')
@section('content')
<div class="card">
    <div class="card-header"></div>
    <div class="card-body">
        <form action="/movie/update/{{ $mv->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="imdb">Imdb</label>
                <input type="text" name="imdb" class="form-control" id="imdb" value="{{ $mv->imdb }}" required>
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $mv->title }}" required>
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <select name="genre" id="genre" class="form-control">
                    <option value="0" hidden>--Pilih Genre--</option>
                    <option value="Action" {{ ($mv->genre) == "Action" ? 'Selected':'' }}>Action</option>
                    <option value="Comedy" {{ ($mv->genre) == "Comedy" ? 'Selected':'' }}>Comedy</option>
                    <option value="Drama" {{ ($mv->genre) == "Drama" ? 'Selected':'' }}>Drama</option>
                    <option value="Fantasy" {{ ($mv->genre) == "Fantasy" ? 'Selected':'' }}>Fantasy</option>
                    <option value="Horror" {{ ($mv->genre) == "Horror" ? 'Selected':'' }}>Horror</option>
                    <option value="Mystery" {{ ($mv->genre) == "Mystery" ? 'Selected':'' }}>Mystery</option>
                    <option value="Romance" {{ ($mv->genre) == "Romance" ? 'Selected':'' }}>Romance</option>
                    <option value="Sci-fi" {{ ($mv->genre) == "Sci-fi" ? 'Selected':'' }}>Sci-fi</option>
                    <option value="Thriller" {{ ($mv->genre) == "Thriller" ? 'Selected':'' }}>Thriller</option>
                </select>
            </div>
            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" min="1900" max="2025" name="year" id="year" class="form-control" value="{{ $mv->year }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control">{{ $mv->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="poster">Poster</label>  
                <input type="file" name="poster" id="poster" accept="image/" class="form-control">
            </div>
            <div class="form-group">
                @if ($mv -> poster)
                    <img src="{{ asset('/storage/poster/'.$mv->poster)}}" alt="$m->poster" width="80" height="80">
                @else
                    <img src="{{ asset('/storage/poster/no-image.jpg')}}" alt="No Image" width="80" height="80">
                @endif
                <br><small><i>*foto sebelumnya</i></small>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection