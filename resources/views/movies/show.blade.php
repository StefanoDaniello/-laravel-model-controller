@extends('layouts.base_layout')
@section('title', 'home')

@section('content')

   
    <div class="container text-center ">
    <h1>{{$movie->title}}</h1>
        <div class="row d-flex justify-content-center">
            <div class="card">
                <div class="card-img">
                    <img src="{{$movie->image}}"  alt="item.series">
                </div>
                <div class="card-body">
                    <h6 class="card-title">{{$movie->title}}</h6>
                    <p class="card-text">{{$movie->original_title}}</p>
                    <p class="card-text">{{$movie->date}}</p>
                </div>
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
       margin: 10px;
       padding: 10px;
       background-color: black;
       color: white;
    }
    .card-img{
       height: 500px;
       border-radius: 10px;
       overflow: hidden;
   }
</style>