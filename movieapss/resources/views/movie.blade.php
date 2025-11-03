@extends('layouts.main')
@section('title', 'Movie')
@section('content')
  <div class="card">
    <div class="card-header">
      <a href="/movie/addform" class="btn btn-primary" ><i class="bi bi-plus-square"></i></a>
    </div>
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
          @foreach($mv as $idx => $m)
          <tr>
            <td>{{ $idx + 1  }}</td>
            <td>{{ $m -> imdb }}</td>
            <td>{{ $m -> title }}</td>
            <td>{{ $m -> genre }}</td>
            <td>{{ $m -> year }}</td>
            <td>
              @if ($m -> poster)
                <img src="{{ asset('/storage/poster/'.$m->poster)}}" alt="$m->poster" width="80" height="80">
              @else
                <img src="{{ asset('/storage/poster/no-image.jpg')}}" alt="No Image" width="80" height="80">
              @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection