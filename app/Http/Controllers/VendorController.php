<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index()
    {
        $vendors = Vendor::latest()->get();
        return view();
    }

    public function show($id)
    {
    	$vendor = Vendor::find($id);
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

    public function edit($id)
    {
        $vendor = Vendor::find($id);
    }
    
    public function update($id, Request $request)
    {
        $vendor = Vendor::find($id);
        if ($vendor != null) {
            $vendor->update([

            ]);
        }	
        return redirect()->back();
    }

    public function destroy($id)
    {
    	$vendor = Vendor::find($id);
        if ($vendor != null) {
            $vendor->delete();
        }
        return redirect()->back();
    }
}
