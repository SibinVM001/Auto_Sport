<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleTypes extends Model
{
    use HasFactory;

    public function vehicle() {

        return $this->hasManyThrough(Models::class, Brands::class, 'vehicle_id', 'brand_id');

    }

    // public function vehicle() {

    //     return $this->belongsTo(Vehicle::class, 'vehicle_id');

    // }
}
