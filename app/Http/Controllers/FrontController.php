<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class FrontController extends Controller
{
   
    public function index(){
        return view('index');
    }
    public function contacto(){
        return view('contacto');
    }
    public function reviews(){
        $movies = Movie::Movies();
        return view('reviews',compact('movies'));
    
    }
    public function admin(){
        return view('admin.index');
    }
}
