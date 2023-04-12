<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananHotel extends Model
{
   
    use HasFactory;
    protected $fillable =[
        'user_id',
        'night_count',
        'check_in',
        'check_out',
        'total_cost',
        'hotel_id'
        ];
   
        public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
    
}
