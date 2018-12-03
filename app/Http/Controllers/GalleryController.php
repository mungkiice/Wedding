<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
    	$galleries = Gallery::latest()->get();
        return view();
    }

    public function show($id)
    {
    	$gallery = Gallery::find($id);
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

    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view();
    }

    public function update($id, Request $request)
    {
        $gallery = Gallery::find($id);
        if ($gallery != null) {    
            $gallery->update([
                ''
            ]);
        }	
        return redirect()->back();
    }
    
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        if ($gallery != null) {
            $gallery->delete();
        }
        return redirect()->back();
    }
}
