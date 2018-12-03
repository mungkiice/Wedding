<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class ReservationController extends Controller
{
    public function index()
    {
    	$reservations = Reservation::all();
    	$book_list = [];
    	foreach ($reservations as $reservation) {
    		$book_list[] = Calendar::event(
    			$reservation->user->name,
    			true,
    			new \DateTime($reservation->date),
    			new \DateTime($reservation->date. ' +1 day ')
    		);
    	}
    	$calendar = Calendar::addEvents($book_list);
    	return view('schedule', compact('calendar'));
    }

    public function store(Request $request)
    {
    	
    }
}
