<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    // Menampilkan semua restoran
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('restaurants.index', compact('restaurants'));
    }

    // Menampilkan detail restoran dan menu yang tersedia
    public function show($id)
    {
        $restaurant = Restaurant::with('menus')->findOrFail($id);
        return view('restaurants.show', compact('restaurant'));
    }
}