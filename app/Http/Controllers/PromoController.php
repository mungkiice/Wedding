<?php

namespace App\Http\Controllers;

use App\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function index()
    {
    	$promos = Promo::latest()->get();
    	return view('admin.promos', compact('promos'));
    }

    public function create()
    {
    	return view('admin.promo-form');	
    }

    public function show()
    {
    	
    }
    
    public function store(Request $request)
    {
    	$promo = Promo::create([
    		'image' => $request->image->store('promos', 'public')
    	]);
    	return redirect('/admin/promo');
    }

    public function edit($promoID)
    {
    	$promo = Promo::find($promoID);
    	return view('admin.promo-edit-form', compact('promo'));
    }

    public function update($promoID, Request $request)
    {
    	$promo = Promo::find($promoID);
    	$path = null;
    	if($promo != null){
    		if($request->hasFile('image')){
    			$path = $request->image->store('promos', 'public');
    		}
    		$promo->update([
    			'image' => $path ?: $promo->image
    		]);
    	}
    	return redirect('/admin/promo');
    }

    public function destroy($promoID)
    {
    	$promo = Promo::find($promoID);
    	if($promo != null){
    		$promo->delete();
    	}
    	return back();
    }
}
