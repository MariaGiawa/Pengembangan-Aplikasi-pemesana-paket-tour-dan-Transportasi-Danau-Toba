<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
    protected $fillable=[
        'transportation_id',
        'pickinglocation',
        'pickingoff',
        'pickingupdate',
        'pickinguphour',
        'pickingoffdate',
        'pickingoffhour'
    ];

    public function transportations()
    {
        return $this->belongsTo(Transportations::class);
    }
    
}
