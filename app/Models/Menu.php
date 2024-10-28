<?php

// app/Models/Menu.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_id', 
        'name', 
        'description', 
        'price', 
        'category'
    ];

    // Relasi ke tabel Restaurant
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
