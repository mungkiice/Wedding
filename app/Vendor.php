<?php

namespace App;

class Vendor extends Model
{
	public function category()
	{
		return $this->belongsTo(Category::class);
	}
}
