@extends('layout/main-layout')

@section('content')

<div class="container text-center m-5">
    <h2>Movies</h2>

    <div class="container d-flex flex-wrap">

        @foreach($movies as $movie)

        <div class="card col-3 p-4">
            
              <h5 class="card-title">{{$movie->title}}</h5>

              <h6 class="card-title">{{$movie->original_title}}</h6>

              <span>Nation: <strong style="color:brown">{{$movie->nationality}}</strong> </span>
              
              <span>Data: <strong class="text-center">{{$movie->date}}</strong> </span>
              
              <span>Vote: <strong style="color:rgb(106, 147, 0)">{{$movie->vote}}</strong> </span>

              <a href="#" class="btn btn-primary">Guarda Ora</a>
          
          </div>

        @endforeach
    </div>

</div>

@endsection