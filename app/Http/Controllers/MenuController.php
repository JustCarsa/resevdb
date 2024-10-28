<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    // Menampilkan semua menu untuk restoran tertentu
    public function index($restaurantId)
    {
        $restaurant = Restaurant::findOrFail($restaurantId);
        $menus = $restaurant->menus;
        return view('menus.index', compact('restaurant', 'menus'));
    }
}