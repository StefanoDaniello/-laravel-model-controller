<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Book;
class HomeController extends Controller
{
   public function index(){
       // usando select possiamo prendere il singolo campo e stamparlo
       $movies=Movie::where('vote','>','9')->limit(2)->get();
       $books=Movie::orderBy('title','asc')->limit(3)->get();
    //    dd($books);
       $data=[
           'movies'=>$movies,
           'books'=>$books
       ];
       return view('home', $data);
   }
}
