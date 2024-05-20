<?php

namespace App\Http\Controllers;

use App\Models\Truck_driver;
use Illuminate\Http\Request;

class TruckDriverController extends Controller
{
   public function index(){
    $truck_drivers = Truck_driver::orderBy('id')->get();
    return view('truck_driver.index', compact('truck_drivers'));
   }

   public function create(){
    return view('truck_driver.create');
   }

   public function store(Request $request){

    $truck_driver = new Truck_driver();
    $truck_driver->dni=$request->dni;
    $truck_driver->ciudad=$request->poblacion;
    $truck_driver->nombre=$request->name;
    $truck_driver->telefono=$request->tfno;
    $truck_driver->direccion=$request->direccion;
    $truck_driver->salario=$request->salario;

    $truck_driver->save();

   }

   public function show(Truck_driver $truck_driver){

    return view('truck_driver.show',compact('truck_driver'));

   }

   public function destroy(Truck_driver $truck_driver){
        $truck_driver -> delete();
        return redirect()->route('trucks.index');
   }

   public function edit(Truck_driver $truck_driver){
    return view('truck_driver.edit', compact('truck_driver'));
   }


   public function update(Request $request, Truck_driver $truck_driver){
    $truck_driver->dni=$request->dni;
    $truck_driver->ciudad=$request->poblacion;
    $truck_driver->nombre=$request->name;
    $truck_driver->telefono=$request->tfno;
    $truck_driver->direccion=$request->direccion;
    $truck_driver->salario=$request->salario;
    $truck_driver->save();

    return redirect() ->route('trucks.index');

   }

}
