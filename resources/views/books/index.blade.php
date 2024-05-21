@extends('layouts.base_layout')
@section('title', 'home')

@section('content')

   
    <div class="container">
    <h1>All Books</h1>
        <div class="row">
            @foreach ($books as $book)
                <div  class="col-12 col-md-6 col-lg-3 my-3">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{$book->cover_image}}"  alt="item.series">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" id="title-book"><a href="{{route('books.show', $book->id)}}">{{$book->title}}</a></h5>
                            <p class="card-text">{{$book->ploat}}</p>
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
       height: 600px !important;
       background-color: black;
       color: white;
    }
    .card-img{
       height: 500px;
       border-radius: 10px;
       overflow: hidden;
    }
    #title-book{
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