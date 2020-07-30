<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    
    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
