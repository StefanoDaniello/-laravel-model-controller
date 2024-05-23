@extends('layouts.base_layout')
@section('title', 'home')

@section('content')
    <div class="container ">
        <h1>home</h1>
        <ul>
            <h2>Best Book</h2>
            @foreach ($books as $book)
                <li>{{ $book->title }}</li>
            @endforeach
            <h2>Best Movie</h2>
            @foreach ($movies as $movie)
                <li>{{ $movie->title }}</li>
            @endforeach
        </ul>
    </div>
@endsection
