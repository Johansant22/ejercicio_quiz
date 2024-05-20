<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribute extends Model
{
    use HasFactory;
    protected $table = 'distributes';

    public function truckDriver()
    {
        return $this->belongsTo(Truck_driver::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
