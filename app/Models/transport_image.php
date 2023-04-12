<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transport_image extends Model
{
    use HasFactory;
    protected $fillable=[
        'transportation_id',
        'images'
    ];
    public function transportation(){
        return $this->belongsTo(Transportations::class);
    }
}
