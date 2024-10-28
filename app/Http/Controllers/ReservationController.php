<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Restaurant;
use App\Models\Table;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    // Menampilkan formulir reservasi
    public function create($restaurantId)
    {
        $restaurant = Restaurant::findOrFail($restaurantId);
        $tables = Table::where('restaurant_id', $restaurantId)->get();
        return view('reservations.create', compact('restaurant', 'tables'));
    }

    // Menyimpan reservasi
    public function store(Request $request, $restaurantId)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'table_id' => 'required|exists:tables,id',
            'reservation_date' => 'required|date',
            'reservation_time' => 'required|date_format:H:i',
            'guest_count' => 'required|integer|min:1'
        ]);

        $reservation = new Reservation([
            'user_id' => $request->user_id,
            'restaurant_id' => $restaurantId,
            'table_id' => $request->table_id,
            'reservation_date' => $request->reservation_date,
            'reservation_time' => $request->reservation_time,
            'guest_count' => $request->guest_count
        ]);
        $reservation->save();

        return redirect()->route('reservations.success')->with('success', 'Reservasi berhasil dibuat!');
    }
}