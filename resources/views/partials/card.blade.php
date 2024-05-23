<div class="container text-center">
    <div class="row d-flex justify-content-center">
        <div class="card">
            <div class="card-img">
                <img src="{{$item->image ? $item->image : $item->cover_image}}" alt="{{ $item->title }}">
            </div>
            <div class="card-body">
                @if ($item->plot)
                    <h5 class="card-title" id="title-book"> <a href="{{ route('books.show', $item->id) }}">{{ $item->title }}</a></h5>
                @endif
                @if ($item->original_title)
                    <h5 class="card-title" id="title-book"> <a href="{{ route('movies.show', $item->id) }}">{{ $item->title }}</a></h5>
                    <p class="card-text">{{ $item->original_title ? $item->original_title : '' }}</p>
                @endif
                @if ($item->date)
                    <p class="card-text">{{ $item->date }}</p>
                @endif
            </div>
        </div>
    </div>
</div>


<style lang="scss" scoped>
    img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }
    .card {
        height: 700px !important;
        width: 400px !important;
        margin: 10px;
        padding: 10px;
        background-color: white;
        color: black ;
    }
    .card-img {
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
