<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$galleries = Gallery::inRandomOrder()->take(3)->get();
        return view('home', compact('galleries'));
    }

    public function adminIndex()
    {
    	return view('admin.index');
    }
}
