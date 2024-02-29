<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class MovieController extends Controller
{
  public function movies()
  {
    $movies = Movie::all();
    return view('movies', ['movies' => $movies]);
  }

  public function createMovie()
  {
    return view('createMovie');
  }

  public function storeMovie(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'title' => 'required|unique:movies',
      'image_url' => 'required|url',
      'published_year' => 'required|integer',
      'is_showing' => 'required|boolean',
      'description' => 'required',
    ]);

    if ($validator->fails()) {
      return redirect('/admin/movies/create')
        ->withErrors($validator)
        ->withInput();
    }

    $movie = new Movie();
    $movie->title = request('title');
    $movie->image_url = request('image_url');
    $movie->published_year = request('published_year');
    $movie->is_showing = request('is_showing') ? true : false;
    $movie->description = request('description');
    $movie->save();

    return redirect('/admin/movies');
  }

  public function editMovie($id)
  {
    $movie = Movie::find($id);
    return view('editMovie', ['movie' => $movie]);
  }

  public function updateMovie(Request $request, $id)
  {
    $validator = Validator::make($request->all(), [
      'title' => 'required|unique:movies,title,' . $id,
      'image_url' => 'required|url',
      'published_year' => 'required|integer',
      'is_showing' => 'required|boolean',
      'description' => 'required',
    ]);

    if ($validator->fails()) {
      return redirect('/admin/movies/' . $id . '/edit')
        ->withErrors($validator)
        ->withInput();
    }

    $movie = Movie::find($id);
    $movie->title = request('title');
    $movie->image_url = request('image_url');
    $movie->published_year = request('published_year');
    $movie->is_showing = request('is_showing') ? true : false;
    $movie->description = request('description');
    $movie->save();

    return redirect('/admin/movies');
  }
}