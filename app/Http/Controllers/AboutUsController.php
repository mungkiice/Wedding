<?php

namespace App\Http\Controllers;

use App\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
	public function showAboutUs()
	{
		
	}

    public function adminShowAboutUs()
    {
    	$aboutUs = AboutUs::first();
    	return view('admin.aboutus-form', compact('aboutUs'));
    }

    public function updateAboutUs(Request $request)
    {
    	$aboutUs = AboutUs::first();
    	$aboutUs->update([
    		'text' => $request->text
    	]);
    	return redirect()->back();
    }
}
