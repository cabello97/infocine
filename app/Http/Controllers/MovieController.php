<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;

class MovieController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $movies = Movie::Movies();
        return view('pelicula.index', compact('movies'));
    }

    public function likes(Request $request) {

        $movie = Movie::findOrFail($request['id']);

        $movie->likes = $request->likes + 1;

        $movie->save();
        return redirect('info/' . $request->id)->with('message', 'Me gusta guardado Correctamente');
    }

    public function dislikes(Request $request) {

        $movie = Movie::findOrFail($request['id']);

        $movie->dislikes = $request->dislikes + 1;

        $movie->save();
        return redirect('info/' . $request->id)->with('message', 'No me gusta guardado Correctamente');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        $genres = Genre::pluck('genre', 'id');
        return view('pelicula.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        Movie::create($request->all());
        return redirect('/pelicula')->with('message', 'Pelicula creada Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {

        try {
            $genres = Genre::pluck('genre', 'id');
            return view('pelicula.edit', ['genres' => $genres, 'movie' => Movie::findOrFail($id), 'id' => $id]);
        } catch (Illuminate\Database\QueryException $e) {
            return view('errors/Database');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {

        $movie = Movie::findOrFail($request['id']);
        if (!empty($movie)) {
            if (!empty($request['name'])) {
                $movie->name = $request['name'];
            }
            if (!empty($request['cast'])) {
                $movie->cast = $request['cast'];
            }
            if (!empty($request['synopsis'])) {
                $movie->synopsis = $request['synopsis'];
            }
            if (!empty($request['direction'])) {
                $movie->direction = $request['direction'];
            }
            if (!empty($request['duration'])) {
                $movie->duration = $request['duration'];
            }
            if (!empty($request['age'])) {
                $movie->age = $request['age'];
            }
            if (!empty($request['trailer'])) {
                $movie->trailer = $request['trailer'];
            }
            if (!empty($request['path'])) {
                $movie->path = $request['path'];
            }
            if (!empty($request['genre_id'])) {
                $movie->genre_id = $request['genre_id'];
            }
        }
        $movie->save();
        \Session::flash('message', 'Pelicula Editada Correctamente');
        return \Redirect::to('/pelicula');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        Movie::destroy($id);
        \Session::flash('message', 'Pelicula Eliminada Correctamente');

        return \Redirect::to('/pelicula');
    }

}
