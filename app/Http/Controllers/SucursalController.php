<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SUCURSAL;

class SucursalController extends Controller
{
    public function visualizar()
    {
        $sucursal = SUCURSAL::all();

        return view ('admin.visualizar.sucursal')->with("sucursal", $sucursal);
    }

    public function agregar()
    {
    	return view('admin.agregar.sucursal');
    }

    public function create(Request $request)
    {
        $sucursal = new SUCURSAL ($request->all());

        $sucursal->save();

        return redirect('admin/home');
    }

    public function modificar()
    {
        $sucursal = SUCURSAL::all();

        return view ('admin.modificar.sucursal')->with("sucursal", $sucursal);
    }

    public function update(Request $request)
    {
        $estado = $request->nombreEstado;

        $sucursal = SUCURSAL::where('estado',$estado)->first();
   
        $sucursal->estado= $request->estado;
        $sucursal->ciudad= $request->ciudad;

        $sucursal-> save();

        return redirect('admin/home');
    }

    public function eliminar()
    {
        $sucursal = SUCURSAL::all();
        
        return view ('admin.eliminar.sucursal')->with("sucursal", $sucursal);    
    }

    public function delete(Request $request)
    {
        $estado = $request->nombreEstado;

        $sucursal = SUCURSAL::where('estado',$estado)->delete();

        return redirect('admin/home');
    }

}
