<?php

namespace App;

class Category extends Model
{
    public function vendors()
    {
    	return $this->hasMany(Vendor::class);
    }
}
