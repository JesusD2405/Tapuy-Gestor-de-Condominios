<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EMPLEADO;
use App\DIRECCION;
use App\SUCURSAL;

class EmpleadoController extends Controller
{

    public function visualizar()
    {
        $empleado = EMPLEADO::all();

        return view('admin.visualizar.empleado')->with('empleado', $empleado);
    }

    public function agregar()
    {
        $sucursal = SUCURSAL::all();

        return view('admin.agregar.empleado')->with("sucursal", $sucursal);
    }

    public function create(Request $request)
    {
    	$empleado = new EMPLEADO($request->all());
    	$direccion = new DIRECCION;

        $direccion->descripcion= $request->direccion;
        $direccion->id_propiedad= $request->id_propiedad;
        
        $empleado->save();
        $direccion->save();

        return redirect('admin/home');
    }

    
    public function modificar()
    {
        $empleado = EMPLEADO::all();

        return view ('admin.modificar.empleado')->with("empleado", $empleado);
    }

    public function update(Request $request)
    {
        $ci = $request->ci;

        $empleado = EMPLEADO::where('ci',$ci)->first();

        $empleado->ci= $request->nuevaCi;
        $empleado->nombre= $request->nombre;
        $empleado->apellido= $request->apellido;
        $empleado->telefono= $request->tlf;
        $empleado->tipo_propiedad= $request->tipo_propiedad;
        $empleado->id_propiedad= $request->id;
        
        $empleado->save();

        return redirect('admin/home');
    }

    public function eliminar()
    {
        $empleado = EMPLEADO::all();
        
        return view ('admin.eliminar.empleado')->with("empleado", $empleado);    
    }

    public function delete(Request $request)
    {
        $ci = $request->ci;

        $empleado = EMPLEADO::where('ci',$ci)->delete();

        return redirect('admin/home');
    }  

}
