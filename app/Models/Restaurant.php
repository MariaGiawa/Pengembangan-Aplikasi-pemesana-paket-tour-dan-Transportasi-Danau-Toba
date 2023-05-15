<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_restaurant',
        'lokasi',
        'description',
        'harga'
    ];


    public function images()
    {
        return $this->hasMany(RestaurantImage::class);
    }
    public function reviews()
    {
        return $this->hasMany(Restaurant_Reviews::class);
    }
}
