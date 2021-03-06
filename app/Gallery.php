<?php

namespace App;

class Gallery extends Model
{
    public function vendors()
    {
    	return $this->belongsToMany(Vendor::class, 'gallery_vendor');
    }

    public function photos()
    {
    	return $this->hasMany(Photo::class);
    }
}
