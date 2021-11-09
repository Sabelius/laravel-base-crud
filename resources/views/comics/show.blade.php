@extends('layouts.main')

@section("title", "Single-Comic")


@section("content")
<div class="comic container text-center pt-2">
    <h1>Comic:</h1>
</div>
<div class="comic container pt-3">
    <img src="{{$single_comic->url}}">
    <h3>{{$single_comic->comic_name}}</h3>
    <p>{{$single_comic->description}}</p>
    <h5>{{$single_comic->author}}</h5>
    <h5>${{$single_comic->price}}</h5>
</div>
<div class="container pt-2">
    <form class="deleting-button" action="{{route('comics.destroy', $single_comic)}}" method="POST">
        @method("delete")
        @csrf
        <button type="submit" class="btn btn-danger">Cancella fumetto</button>
    </form>
</div>
@endsection