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
                        <h5 class="card-title" id="title-movie"><a href="{{route('books.show', $movie->id)}}">{{$movie->title}}</a></h5>
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
   #title-movie{
        a{
            color: black;
            text-decoration: none;
        }
        a:hover{
        color: aqua;
        text-decoration: underline;
        }
    }
</style>