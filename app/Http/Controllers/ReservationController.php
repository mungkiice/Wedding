<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Vendor;
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
        return redirect('/vendors');
    }

    public function addVendors(Request $request)
    {
        $reservation = auth()->user()->reservations()->latest()->first();
        foreach ($request->vendorID as $vendorID) {
            $vendor = Vendor::find($vendorID);
            if ($vendor != null) {
                $reservation->update([
                    'price' => $vendor->price + $reservation->price
                ]);
                $reservation->vendors()->attach($vendorID);
            }
        }
        auth()->user()->cart->vendors()->detach();
        return redirect('/');
    }

    public function adminIndex()
    {
        $reservations = Reservation::latest()->get();
        return view('admin.reservations', compact('reservations'));
    }

    public function edit($reservationID)
    {
        $reservation = Reservation::find($reservationID);
        return view('admin.reservation-edit-form', compact('reservation'));   
    }

    public function update($reservationID, Request $request)
    {
        $reservation = Reservation::find($reservationID);
        if ($reservation != null) {
            $reservation->update([
                'status' => $request->status ?: $reservation->status
            ]);   
        }
        return redirect('/admin/reservation');
    }

    public function destroy($reservationID)
    {
       $reservation = Reservation::find($reservationID);
       if ($reservation != null) {
        $reservation->delete();
    }
    return redirect()->back();   
}
}
