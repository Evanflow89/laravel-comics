@extends('layouts.base')

@section('page-title')
    Comic
@endsection

@section('page-content')
<div class="container comicPage">
<h1>{{$comic['title']}}</h1>
</div>
@endsection