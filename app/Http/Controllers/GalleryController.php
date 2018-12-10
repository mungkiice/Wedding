<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Vendor;
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
        $vendors = Vendor::all();
        return view('admin.gallery-form', compact('vendors'));
    }

    public function store(Request $request)
    {   
    	$gallery = Gallery::create([
            'celeb' => $request->celeb
        ]);
        $gallery->photos()->create([
            'path' => $request->photo->store('gallery', 'public'),
        ]);
        foreach ($request->vendorID as $vendorID) {
            $vendor = Vendor::find($vendorID);
            if ($vendor != null) {
                $gallery->vendors()->attach($vendorID);
            }
        }
        return redirect('/admin/gallery');
    }

    public function edit($galleryID)
    {
        $gallery = Gallery::find($galleryID);
        $vendors = Vendor::all();
        return view('admin.gallery-edit-form', compact('vendors', 'gallery'));
    }

    public function update($galleryID, Request $request)
    {
        $gallery = Gallery::find($galleryID);
        $path = null;
        if ($gallery != null) {    
            if ($request->hasFile('photo')) {
                $path = $request->photo->store('gallery', 'public');
            }
            $gallery->update([
                'celeb' => $request->celeb ?: $gallery->celeb,
            ]);
            if ($path != null) {
                $gallery->photos()->create([
                    'path' => $path
                ]);
            }
            if ($request->vendorID) {
                foreach ($request->vendorID as $vendorID) {
                    $vendor = Vendor::find($vendorID);
                    if ($vendor != null) {
                        $gallery->vendors()->attach($vendorID);
                    }
                }
            }
        }	
        return redirect('/admin/gallery');
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
