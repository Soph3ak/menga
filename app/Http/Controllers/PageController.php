<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function mangaDetails(){
        return view('pages.manga-details');
    }
    public function mangaReading(){
        return view('pages.manga-reading');
    }
    public function categories(){
        return view('pages.categories');
    }

}
