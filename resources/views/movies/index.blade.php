@extends('layouts.base_layout')
@section('title', 'home')

@section('content')

   
    <div class="container">
    <h1>All Movies</h1>
        <div class="row">
            @foreach ($movies as $movie)
                <div  class="col-12 col-md-6 col-lg-3 my-3">
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
            @endforeach
        </div>
    </div>
    
@endsection

<style lang="scss" scoped>
    img{
        height: 100%;
    }
   .card{
       height: 700px !important;
       background-color: black;
       color: white;
    }
    .card-img{
       height: 500px;
       border-radius: 10px;
       overflow: hidden;
   }
</style>