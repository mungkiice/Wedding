<?php

namespace App\Http\Controllers;

use App\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
    	$reservations = Reservation::where('status', 'waiting for the Day')->get();
    	return view('schedule', compact('reservations'));
    }

    public function create($date)
    {
        return view('reservation-form', compact('date'));
    }

    public function store(Request $request)
    {
        if ($request->date == null) {
            return redirect()->back();
        }
    	Reservation::create([
            'user_id' => auth()->user()->id,
            'date' => Carbon::parse($request->date)->format('Y-m-d'),
            'packet' => $request->packet,
        ]);
        return redirect('/');
    }

    public function addVendors(Request $request)
    {
        $reservation = auth()->user()->reservations()->latest()->first();
        foreach ($request->vendorID as $vendorID) {
            $reservation->vendors()->attach($vendorID);
        }
    }
}
