<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentBike extends Model
{
    //

    protected $fillable = [
        'familyPlan', 'bikeQuantity', 'rentType', 'amount',
    ];
}
