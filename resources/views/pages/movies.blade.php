@extends('layouts.app')

@section('title')
    Sezione Movie
@endsection


@section('content')
<div class="container">
    <div class="row row-cols-md-4 g-2">
        @forelse ($movies as $movie)
        <div class="col">
        <div class="card h-100 overflow-hidden">
            <div class="overflow-hidden">
                <img src="{{$movie->image}}" class="card-img-top" alt="...">
            </div>
            <div class="">
              <div class="card-header">
                  <h5 class="card-title text-center">{{$movie->title}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted text-center">
              {{$movie->original_title}}</h6>
              </div>
              <p class="card-text"></p>

              <ul class="list-group list-group-flush">
                <li class="list-group-item">uscita: {{date('d-m-Y', strtotime($movie->date))}}</li>
                <li class="list-group-item">voto: {{$movie->vote}}</li>
                <li class="list-group-item">Nazionalità: {{$movie->nationality}}</li>
              </ul>
              <p class="card-text"></p>
              <p class="card-text"></p>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        @empty
            <p>No users</p>
        @endforelse
    </div>
</div>
@endsection