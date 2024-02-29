<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
  public function movies()
  {
    $movies = Movie::all();
    return view('movies', ['movies' => $movies]);
  }
}