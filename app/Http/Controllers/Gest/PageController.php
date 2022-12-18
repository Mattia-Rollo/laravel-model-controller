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
        // $movies = Movie::where('title', 'Gravity')->get();
        //con un sigolo risultato first(), ho direttamente un oggetto non un array
        // $movies = Movie::where('title', '!=', 'Gravity')->first(); 
        $movies = Movie::All();
        // dd(compact('movies'));
        return view('pages.movies', compact('movies'));
    }
}