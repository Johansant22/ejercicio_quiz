<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    use HasFactory;

    protected $table = 'trucks';
    protected  $guarde = [];

    public function truckDrivers()
    {
        return $this->belongsToMany(Truck_driver::class, 'conducts');
    }

}
