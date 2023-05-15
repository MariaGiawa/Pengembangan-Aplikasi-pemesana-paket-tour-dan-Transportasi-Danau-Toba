<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $fillable =[
        'nama',
        'detail',
        'image'
    ];

    public function ratings()
    {
        return $this->hasMany(Tour_reviews::class);
    }
}
