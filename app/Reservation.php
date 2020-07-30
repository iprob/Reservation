<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'name', 'date', 'time', 'note', 'phone'
    ];

    protected $casts = [
        'date' => 'date',
        'time' => 'time'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->hasOne(Status::class);
    }

    public function meals()
    {
        return $this->belongsToMany(Meal::class)->withTimestamps();
    }
}
