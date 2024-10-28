<?php

// app/Models/Restaurant.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'address', 
        'phone_number'
    ];

    // Relasi ke tabel Menu
    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    // Relasi ke tabel Table
    public function tables()
    {
        return $this->hasMany(Table::class);
    }

    // Relasi ke tabel Reservation
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
