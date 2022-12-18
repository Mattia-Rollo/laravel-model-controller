@extends('layouts.app')

@section('title')
    Sezione Movie
@endsection


@section('content')
<div class="container">
    <div class="row row-cols-md-4">
        @forelse ($movies as $movie)
        <div class="col">
        <div class="card">
            <img src="{{$movie->image}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$movie->title}}</h5>
              <p class="card-text">{{$movie->original_title}}</p>
            </div>
          </div>
        </div>
        @empty
            <p>No users</p>
        @endforelse
    </div>
</div>
@endsection