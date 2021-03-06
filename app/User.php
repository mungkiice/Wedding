<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $guarded = [];
    protected $hidden = [
        'password'
    ];

    //buat ignore rememberToken bawaan framework laravel
	public function getRememberTokenName(){
		return null;
	}

	public function cart()
	{
		return $this->hasOne(Cart::class);
	}

	public function reservations()
	{
		return $this->hasMany(Reservation::class);
	}
}
