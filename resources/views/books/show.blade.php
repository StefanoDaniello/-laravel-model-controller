@extends('layouts.base_layout')
@section('title', 'home')

@section('content')

   
    <div class="container text-center ">
        <h1>{{$book->title}}</h1>
        <div class="row d-flex justify-content-center">
                <div class="card">
                    <div class="card-img">
                        <img src="{{$book->cover_image}}"  alt="{{$book->title}}">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$book->title}}</h5>
                        <p class="card-text">{{$book->ploat}}</p>
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
       height: 600px !important;
       width: 400px !important;
       margin: 10px;
       padding: 10px;
       background-color: black;
       color: white;
    }
    .card-img{
       border-radius: 10px;
       overflow: hidden;
   }

</style>