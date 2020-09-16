<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //

     protected $guarded = [];

    public function shipment()
    {
        return $this->belongsTo(Shipment::class);
    }
}
