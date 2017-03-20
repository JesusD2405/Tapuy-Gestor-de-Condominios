<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TITULAR;
use App\DIRECCION;
use App\CONDOMINIO;

class TitularController extends Controller
{
    public function visualizar()
    {
        $titular = TITULAR::all();

        return view('admin.visualizar.titular')->with('titular', $titular);
    }

    public function agregar()
    {
        $condominio = CONDOMINIO::all();

        return view('admin.agregar.titular')->with("condominio", $condominio);
    }

    public function create(Request $request)
    {
        $titular = new TITULAR($request->all());
        $direccion = new DIRECCION();

        $direccion->descripcion= $request->direccion;
        $direccion->id_propiedad= $request->id_propiedad;

    	$titular->save();
        $direccion->save();

    	return redirect('admin/home');
    }

    public function modificar()
    {
        $titular = TITULAR::all();

        return view ('admin.modificar.titular')->with("titular", $titular);
    }

    public function update(Request $request)
    {
        $ci = $request->ci;

        $titular = TITULAR::where('ci',$ci)->first();

        $titular->ci= $request->nuevaCi;
        $titular->nombre= $request->nombre;
        $titular->apellido= $request->apellido;
        $titular->telefono= $request->tlf;
        $titular->tipo_propiedad= $request->tipo_propiedad;
        $titular->id_propiedad= $request->id;

        $titular-> save();

        return redirect('admin/home');
    }

    public function eliminar()
    {
        $titular = TITULAR::all();
        
        return view ('admin.eliminar.titular')->with("titular", $titular);    
    }

    public function delete(Request $request)
    {
        $ci = $request->ci;

        $titular = TITULAR::where('ci',$ci)->delete();

        return redirect('admin/home');
    }

    
}
