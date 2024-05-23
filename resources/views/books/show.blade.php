@extends('layouts.base_layout')
@section('title', 'book_details')

@section('content')
    <div class="container d-flex justify-content-center">
            <div class="card">
                <div class="card-img">
                    <img src="{{$book->cover_image}}"  alt="{{$book->title}}">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$book->title}}</h5>
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
       background-color: black;
       color: white;
    }
    .card-img{
       height: 500px;
       border-radius: 10px;
       overflow: hidden;
   }
</style>

