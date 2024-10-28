<?php

namespace App\Http\Controllers;

use App\Models\Table;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class TableController extends Controller
{
    // Menampilkan daftar meja untuk restoran tertentu
    public function index($restaurantId)
    {
        $restaurant = Restaurant::findOrFail($restaurantId);
        $tables = $restaurant->tables;
        return view('tables.index', compact('restaurant', 'tables'));
    }
}