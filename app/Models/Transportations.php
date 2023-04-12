<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportations extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'type',
        'price',
        'duration',
        'route',
        'location'
    ];
    
    public function rental()
    {
        return $this->hasMany(Transportations::class);
    }
    public function transport_image(){
        return $this->hasMany(transport_image::class);
    }
}
