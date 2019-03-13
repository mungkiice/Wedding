<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Promo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$promos = Promo::all();
    	$galleries = Gallery::inRandomOrder()->get();
        return view('home', compact('galleries', 'promos'));
    }

    public function adminIndex()
    {
    	return view('admin.index');
    }
}
