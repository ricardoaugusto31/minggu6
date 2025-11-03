@extends('layouts.main')
@section('title', 'Movie')
@section('content')
  <div class="card">
    <div class="card-header"></div>
    <div class="card-body">
      <table id="example" class="display" style="width: 100%;">
        <thead>
          <tr>
            <th>No</th>
            <th>Imdb Id</th>
            <th>Title</th>
            <th>Genre</th>
            <th>Year</th>
            <th>Poster</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>tt29381</td>
            <td>Abadi Nan Jaya</td>
            <td>Horor</td>
            <td>2025</td>
            <td>image.jpg</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection