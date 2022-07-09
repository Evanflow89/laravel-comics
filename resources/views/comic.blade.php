@extends('layouts.base')

@section('page-title')
    Comic
@endsection

@section('page-content')
<section class="comicPage">
<div class="container">
    <div class="col-left">
<h1>{{$comic['title']}}</h1>

<p>{{$comic['description']}}</p>
</div>
<div class="col-right">
    <img src="{{asset('img/superman.jpg')}}" alt="Advertise"> 
</div>
</div>
</section>
@endsection


<style>
    main {
        background-color: white !important;
    }
</style>