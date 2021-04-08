<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'location',
        'date',
        'time',
        'numb_of_adult',
        'numb_of_child',
        'name',
        'phone_numb',
        'special_request'
    ];
}
