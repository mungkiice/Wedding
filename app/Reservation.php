<?php

namespace App;

class Reservation extends Model
{
	public function user()
	{
		return $this->belongsTo(User::class);	
	}

	public function vendors()
	{
		return $this->belongsToMany(Vendor::class, 'reservation_vendor');
	}

	public function packet()
	{
		return $this->belongsTo(Packet::class);
	}
}
