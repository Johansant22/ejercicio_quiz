<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conduct extends Model
{
    use HasFactory;
    protected $table = 'conducts';

    public function truckDriver()
    {
        return $this->belongsTo(Truck_driver::class);
    }

    public function truck()
    {
        return $this->belongsTo(Truck::class);
    }
}
