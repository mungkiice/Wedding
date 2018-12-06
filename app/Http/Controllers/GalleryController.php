<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
    	$galleries = Gallery::latest()->get();
        return view('admin.galleries', compact('galleries'));
    }

    public function show($galleryID)
    {
    	$gallery = Gallery::find($galleryID);
        return view();
    }

    public function create()
    {
        return view();
    }

    public function store(Request $request)
    {
    	$gallery = Gallery::create([

        ]);
        return redirect()->back();
    }

    public function edit($galleryID)
    {
        $gallery = Gallery::find($galleryID);
        return view();
    }

    public function update($galleryID, Request $request)
    {
        $gallery = Gallery::find($galleryID);
        if ($gallery != null) {    
            $gallery->update([
                ''
            ]);
        }	
        return redirect()->back();
    }
    
    public function destroy($galleryID)
    {
        $gallery = Gallery::find($galleryID);
        if ($gallery != null) {
            $gallery->delete();
        }
        return redirect()->back();
    }
}
