<?php

namespace App\Http\Controllers;

use App\Category;
use App\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index($categoryName = null)
    {
        $categories = Category::all();
        if ($categoryName != null) {
            $category = Category::where('name', $categoryName)->first();
            if ($category != null) {
                $vendors = $category->vendors()->latest()->get();
            }
        }else{
            $vendors = Vendor::latest()->get();    
        }
        return view('vendors', compact('categories', 'vendors'));
    }


    public function adminIndex()
    {
        $vendors = Vendor::latest()->get();
        return view('admin.vendors', compact('vendors'));
    }

    public function show($vendorID)
    {
    	$vendor = Vendor::find($vendorID);
        return view();
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.vendor-form', compact('categories'));    
    }

    public function store(Request $request)
    {
    	$vendor = Vendor::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'information' => $request->information,
            'price' => $request->price,
            'photo' => $request->photo->store('vendor', 'public')
        ]);
        return redirect('/admin/vendor');
    }

    public function edit($vendorID)
    {
        $vendor = Vendor::find($vendorID);
        $categories = Category::all();

        return view('admin.vendor-edit-form', compact('vendor', 'categories'));
    }
    
    public function update($vendorID, Request $request)
    {
        $vendor = Vendor::find($vendorID);
        $path = null;
        if ($vendor != null) {
            if ($request->hasFile('photo')) {
                $path = $request->photo->store('vendors', 'public');
            }
            $vendor->update([
                'category_id' => $request->category_id ?: $vendor->category_id,
                'name' => $request->name ?: $vendor->name,
                'information' => $request->information ?: $vendor->information,
                'price' => $request->price ?: $vendor->price,
                'photo' => $path ?: $vendor->photo
            ]);
        }	
        return redirect()->back();
    }

    public function destroy($vendorID)
    {
    	$vendor = Vendor::find($vendorID);
        if ($vendor != null) {
            $vendor->delete();
        }
        return redirect()->back();
    }
}
