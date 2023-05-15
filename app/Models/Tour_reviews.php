<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour_reviews extends Model
{
    use HasFactory;
    protected $fillable = [
        'wisata_id',
        'user_id',
        'username',
        'rating',
        'review'
    ];

    public function tour()
    {
        return $this->belongsTo(Wisata::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function calculateAverageRating()
    // {
    //     $ratings = $this->all();
    //     $totalRatings = count($ratings);
    //     $sumRatings = 0;

    //     foreach ($ratings as $rating) {
    //         $sumRatings += $rating->rating;
    //     }

    //     $averageRating = $totalRatings > 0 ? $sumRatings / $totalRatings : 0;

    //     return $averageRating;
    // }
}
