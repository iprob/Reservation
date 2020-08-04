<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Reservation extends Model
{
    protected $fillable = [
        'name', 'date', 'time', 'note', 'phone'
    ];

    protected $attributes = [
        'status_id' => 1,
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
        return $this->belongsTo(Status::class);
    }

    public function meals()
    {
        return $this->belongsToMany(Meal::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($query) {
            $query->user_id = auth()->id();
        });
    }



}
