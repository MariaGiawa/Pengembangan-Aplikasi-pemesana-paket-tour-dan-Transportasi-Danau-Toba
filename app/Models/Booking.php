<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'bookings';
    protected $fillable=[
        'tour_id',
        'nama',
        'email',
        'telepon',
        'tanggal'

    ];

    public function booking(){
        return $this->belongsTo(Tour::class, 'tour_id');
    }
}
