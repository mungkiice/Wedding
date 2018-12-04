<?php

namespace App;

class Cart extends Model
{
    public function vendors()
    {
    	return $this->belongsToMany(Vendor::class, 'cart_vendor');
    }
}
