<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheaterSeats extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'booked', 'active',
    ];
    public $timestamps = false;
}
