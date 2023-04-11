<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
{
    $films = Film::all();

    return view('homepage', compact('films'));
}
}


