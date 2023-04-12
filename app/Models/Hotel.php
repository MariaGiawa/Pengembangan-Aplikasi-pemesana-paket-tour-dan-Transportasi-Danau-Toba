<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_hotel',
        'lokasi',
        'harga',
        'description',
        'status'
    ];

    public function images()
    {
        return $this->hasMany(HotelImage::class);
    }
    public function PemesananHotel()
    {
        return $this->hasMany(PemesananHotel::class);
    }
}
