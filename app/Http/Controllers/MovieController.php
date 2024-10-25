<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
  //
  public function index(){
    // Recupero i movies dal db
    $movies = Movie::all();

    return view('movies.index', compact('movies'));
  }
}
