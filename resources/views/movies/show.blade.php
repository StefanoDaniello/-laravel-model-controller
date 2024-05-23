@extends('layouts.base_layout')
@section('title', 'movie_details')

@section('content')
    <div class="container d-flex justify-content-center">
            <div class="card">
                <div class="card-img">
                    <img src="{{$movie->image}}"  alt="{{$movie->title}}">
                </div>
                <div class="card-body">
                <h5 class="card-title">{{$movie->title}}</h5>
                    <p class="card-text">{{$movie->original_title}}</p>
                    <p class="card-text">{{$movie->date}}</p>
                </div>
            </div>
    </div>
@endsection


<style lang="scss" scoped>
    img{
        height: 100%;
    }
   .card{
       height: 700px !important;
       width: 400px !important;
       background-color: black;
       color: white;
    }
    .card-img{
       height: 500px;
       border-radius: 10px;
       overflow: hidden;
   }
</style>

