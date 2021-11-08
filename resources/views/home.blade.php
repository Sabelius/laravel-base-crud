@extends('layouts.main')

@section("title", "Comic-List")


@section("content")
<div class="container">
    <div class="row">
        <h1 class="mt-2 text-center text-uppercase">Comics-List:</h1>
    </div>
    <div class="row">
        @foreach ($comics as $comic)
            <div class="comics-list pt-3">
                <img src="{{$comic->url}}">
                <h3>{{$comic->comic_name}}</h3>
                <p>{{$comic->description}}</p>
                <h5>{{$comic->author}}</h5>
                <h5>${{$comic->price}}</h5>
            </div>
            <hr>
        @endforeach
    </div>
</div>
