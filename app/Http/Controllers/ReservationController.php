<?php

namespace App\Http\Controllers;

use App\Packet;
use App\Reservation;
use App\Vendor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
    	$reservations = Reservation::where('status', 'menunggu hari H')->get();
    	return view('schedule', compact('reservations'));
    }

    public function create($date)
    {
        $packets = Packet::all();
        return view('reservation-form', compact('packets', 'date'));
    }

    public function store(Request $request)
    {
        if ($request->date == null) {
            return back();
        }
        $reservation = Reservation::create([
            'user_id' => auth()->user()->id,
            'date' => Carbon::parse($request->date)->format('Y-m-d'),
        ]);
        foreach ($request->packetID as $packetID) {
            $packet = Packet::find($packetID);
            if ($packet != null) {
                $reservation->packets()->attach($packetID); 
                $reservation->update([
                    'price' => $reservation->price + $packet->price,
                ]);
            }
        }
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
        $reservation->update([
            'status' => 'menunggu verifikasi'
        ]);
        auth()->user()->cart->vendors()->detach();
        return redirect('/profile');
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
        return back();   
    }

    public function uploadVendorFile($reservationID, $vendorID, Request $request)
    {
        $reservation = Reservation::find($reservationID);
        if ($reservation != null && $request->hasFile('photo')) {
            $vendor = $reservation->vendors()->where('id', $vendorID)->withPivot('status')->first();   
            if ($vendor != null) {
                switch ($vendor->pivot->status) {
                    case 'waiting':
                    $vendor->pivot->status = 'DP';
                    break;
                    case 'DP':
                    $vendor->pivot->status = 'accepted';
                    break;
                    case 'accepted':
                    $vendor->pivot->status = 'pelunasan';
                    break;
                }
                $vendor->pivot->payment_proof = $request->photo->store('payment', 'public');
                $vendor->pivot->save();
            }
        }
        return back();
    }
}

