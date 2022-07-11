@extends('layouts.base')

@section('page-title')
    Comic
@endsection

@section('page-content')
<section class="comicPage">
    <div class="containerXl">
        <div class="container">
            <img class="comicThumb" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        </div>
    </div>
<div class="container">
    <div class="col-left">
<h1>{{$comic['title']}}</h1>
<div class="row available">
    <div class="col-left">
        <p>U.S. Price:<span> {{$comic['price']}} </span></p>
        <p>AVAILABLE</p>
    </div>
    <div class="col-right">
        <span>Check Availability ▾</span>
    </div>
</div>
<p class="description">{{$comic['description']}}</p>
</div>
<div class="col-right">
    <h4>ADVERTISEMENT</h4>
    <img src="{{asset('img/superman.jpg')}}" alt="Advertise"> 
</div>
</div>
{{-- ############### INIZIO TABELLA ################ --}}
<div class="container table">
    <div class="col-left">
        <h2>Talent</h2>
        <div class="row">
            <div class="col-left">
                <span>Art By:</span>
                
            </div>
            <div class="col-right">
                <p>
                    @foreach ($comic['artists'] as $artist)
                        {{$artist}}
                    @endforeach
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-left">
                <span>Written By:</span>
                
            </div>
            <div class="col-right">
                <p>
                    @foreach ($comic['writers'] as $writer)
                    {{$writer}}
                @endforeach
                </p>
            </div>
        </div>
    </div>
    <div class="col-right"></div>
</div>
</section>
@endsection


<style>
    main {
        background-color: white !important;
    }
</style>