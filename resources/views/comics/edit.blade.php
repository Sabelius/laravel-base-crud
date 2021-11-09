@extends('layouts.main')

@section("title", "Comic-Edit")


@section("content")
<div class="comic container text-center pt-2">
    <h1>Modifica fumetto:</h1>
</div>
<div class="comic container text-center pt-5">
    <form action="{{route('comics.update', $comic)}}" method="POST">
        @method("PUT")
        @csrf
        <div class="pt-2">
            <label for="name" class="form-label">Immagine:</label>
            <input type="text" placeholder="url immagine" name="url" value="{{$comic->url}}">
        </div>
        <div class="pt-2">
            <label for="name" class="form-label">Nome fumetto:</label>
            <input type="text" placeholder="nome" name="comic_name" value="{{$comic->comic_name}}"> 
        </div>
        <div class="pt-2">
            <label for="name" class="form-label">Autore:</label>
            <input type="text" placeholder="autore" name="author" value="{{$comic->author}}"> 
        </div>
        <div class="pt-2">
            <label for="name" class="form-label">Prezzo:</label>
            <input type="text" placeholder="prezzo" name="price" value="{{$comic->price}}"> 
        </div>
        <div class="pt-2">
            <label for="name" class="form-label">Descrizione:</label>
            <input type="text" placeholder="descrizione" name="description" value="{{$comic->description}}"> 
        </div>
        <div class="pt-2">
            <button type="submit" class="btn btn-success">Modifica fumetto</button>
        </div>
    </form>
</div>
@endsection