<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;
use App\Comment;
use App\User;

class FrontController extends Controller {

    public function index() {
        $moviesAll = Movie::Movies('');
        return view('index', compact('moviesAll'));
    }

    public function contacto() {
        return view('contacto');
    }

    public function reviews(Request $request) {
        $name = $request['name'];
        $moviesAll = Movie::Movies('');

        $movies = Movie::Movies($name);
        return view('reviews', compact('movies', 'moviesAll'));
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
