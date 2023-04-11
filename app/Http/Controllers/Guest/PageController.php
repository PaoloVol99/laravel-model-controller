<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Movie;

class PageController extends Controller
{
    public function home() {

        $movies = Movie::all();

        $data = [
            'movies' => $movies
        ];

        return view('welcome', $data);
    }



}
