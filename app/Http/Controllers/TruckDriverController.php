<?php

namespace App\Http\Controllers;

use App\Models\Truck_driver;
use Illuminate\Http\Request;

class TruckDriverController extends Controller
{
    public function index()
    {
        $truck_drivers = Truck_driver::orderBy('id')->get();
        return view('truck_driver.index', compact('truck_drivers'));
    }

    public function create()
    {
        return view('truck_driver.create');
    }

   public function store(Request $request){

    $validatedData = $request->validate([
        'dni' => 'required|numeric',
        'ciudad' => 'required|string|max:255',
        'nombre' => 'required|string|max:255',
        'tfno' => 'required|numeric',
        'direccion' => 'required|string|max:255',
        'salario' => 'required|numeric',
    ]);

    $truck_driver = new Truck_driver();
    $truck_driver->dni=$request->dni;
    $truck_driver->ciudad=$request->ciudad;
    $truck_driver->nombre=$request->nombre;
    $truck_driver->telefono=$request->tfno;
    $truck_driver->direccion=$request->direccion;
    $truck_driver->salario=$request->salario;

    $truck_driver->save();

    return redirect()->route('truck_drivers.index')->with('Creado exitosamente');

   }

   public function show(Truck_driver $truck_driver)
   {
       return view('truck_driver.show', compact('truck_driver'));
   }

   public function destroy(Truck_driver $truck_driver){
        $truck_driver -> delete();
        return redirect()->route('trucks.index');
   }

   public function edit(Truck_driver $truck_driver)
    {
        return view('truck_driver.edit', compact('truck_driver'));
    }

    public function update(Request $request, Truck_driver $truck_driver)
    {
        $request->validate([
            'dni' => 'required|unique:truck_drivers,dni,' . $truck_driver->id,
            'poblacion' => 'required',
            'nombre' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'salario' => 'required'
        ]);

        $truck_driver->dni = $request->dni;
        $truck_driver->poblacion = $request->poblacion;
        $truck_driver->nombre = $request->nombre;
        $truck_driver->telefono = $request->telefono;
        $truck_driver->direccion = $request->direccion;
        $truck_driver->salario = $request->salario;

        $truck_driver->save();

        return redirect()->route('truck_drivers.index');
    }

}
