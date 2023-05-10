<?php

namespace App\Http\Controllers\Movie;

use App\Http\Controllers\Controller;
use App\Models\movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $data = config('db');

        return view('index', compact('data'));
    }

    public function movie()
    {
        $data = config('db');

        $movies = movie::all();


        return view('movie', compact('data', 'movies'));
    }


    public function extra()
    {
        return 'COSEextraCOSEextraCOSEextra';
    }
}
