@extends('layouts.base_layout')
@section('title', 'book')

@section('content')

   
    <div class="container">
        <h1>All Books</h1>
        <div class="row">
            @foreach ($books as $item)
            <div class="col-12 col-md-4 col-lg-3">
                @include('partials.card')
            </div>
            @endforeach
        </div>
    </div>

@endsection