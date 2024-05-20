<?php

use App\Http\Controllers\TruckDriverController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::resource('trucks', TruckDriverController::class)->names('trucks');



