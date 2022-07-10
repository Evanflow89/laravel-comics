@extends('layouts.base')

@section('page-title')
    Home Page
@endsection

@section('page-content')
<main>
    <div class="container top">
      <div class="currentSeries">
        <h2>current Series</h2>
      </div>
    </div>
    <div class="container middle">
      <ul class="dcCards">
        @foreach ($comics as $index => $comic)
            <li>
              <a href="{{route('comic',['id'=> $index])}}">
                <div class="dcCard">
                <div class="imgCard">
                  <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}" />
                </div>
                <h4>{{$comic['title']}}</h4>
              </div></li>
            @endforeach
      </ul>
    </div>
    <div class="container bottom">
      <button>Load More</button>
    </div>
  </main>
@endsection