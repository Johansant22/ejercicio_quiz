<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck_driver extends Model
{
    use HasFactory;


    protected $table = 'truck_drivers';
    protected  $guarde = [];

    public function trucks()
    {
        return $this->belongsToMany(Truck::class, 'conducts');
    }

    public function packages()
    {
        return $this->hasMany(Distribute::class);
    }

}
