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
        return view();
    }

    public function show($vendorID)
    {
    	$vendor = Vendor::find($vendorID);
        return view();
    }

    public function create()
    {
        return view();    
    }

    public function store(Request $request)
    {
    	$vendor = Vendor::create([
        ]);
    }

    public function edit($vendorID)
    {
        $vendor = Vendor::find($vendorID);
    }
    
    public function update($vendorID, Request $request)
    {
        $vendor = Vendor::find($vendorID);
        if ($vendor != null) {
            $vendor->update([

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
