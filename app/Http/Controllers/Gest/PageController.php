<?php

namespace App\Http\Controllers\Gest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function getMovies()
    {
        $movies = Movie::All();
        // dd(compact('movies'));
        return view('pages.movies', compact('movies'));
    }
}