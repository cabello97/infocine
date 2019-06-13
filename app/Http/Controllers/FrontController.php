<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;
use App\Comment;
use App\User;

class FrontController extends Controller {

    public function index() {
        return view('index');
    }

    public function contacto() {
        return view('contacto');
    }

    public function reviews() {
        $movies = Movie::Movies();
        return view('reviews', compact('movies'));
    }

    public function admin() {
        return view('admin.index');
    }

    public function info($id) {

        try {
            $genres = Genre::pluck('genre', 'id');
            $comments = Comment::all();
            $users = User::all();

            //return view('info', ['movie' => Movie::findOrFail($id), 'id' => $id]);

            return view('info', ['users' => $users, 'comments' => $comments, 'genres' => $genres, 'movie' => Movie::findOrFail($id), 'id' => $id]);
        } catch (Illuminate\Database\QueryException $e) {
            return view('errors/Database');
        }
    }

}
