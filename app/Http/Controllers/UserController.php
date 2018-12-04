<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function createOrGetCart()
	{
		if (auth()->user()->cart == null) {
			return auth()->user()->cart()->create();
		}
		return auth()->user()->cart;
	}

    public function showProfile()
    {
        $user = auth()->user();
    	return view('profile', compact('user'));
    }

    public function showCart()
    {
        $cart = $this->createOrGetCart();
        $subtotal = $cart->vendors()->sum('price');
    	return view('cart', compact('cart', 'subtotal'));
    }

    public function addToCart($vendorID)
    {
    	$cart = $this->createOrGetCart();
    	$vendor = Vendor::find($vendorID);
    	if ($vendor != null) {
    		$cart->vendors()->attach($vendorID);
    	}
    	return redirect()->back();
    }

    public function clearCart()
    {
        $this->createOrGetCart()->vendors()->detach();
        return redirect()->back();
    }
}
