<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
    	$reservations = Reservation::all();
    	return view('schedule', compact('reservations'));
     //    $book_list = [];
    	// foreach ($reservations as $reservation) {
    	// 	$book_list[] = Calendar::event(
    	// 		$reservation->user->username,
    	// 		true,
    	// 		new \DateTime($reservation->date),
    	// 		new \DateTime($reservation->date),
     //            $reservation->id,
     //            [
     //                'url' => '/',
     //                'color' => '#cddc39',
     //                'backgroundColor' => '#512DA8',
     //                'borderColor' => '#000',
     //                // 'textColor' => '#7B1FA2',
     //            ]
    	// 	);
    	// }
    	// $calendar = Calendar::addEvents($book_list);
    	// return view('schedule', compact('calendar'));
    }

    public function create($date)
    {
        return view('reservation-form', compact('date'));
    }

    public function store(Request $request)
    {
    	
    }
}
