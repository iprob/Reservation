<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{

    protected $fillable = [
        'name'
    ];

    public function reservations()
    {
        return $this->belongsToMany(Reservation::class)->withTimestamps();
    }
    
}
