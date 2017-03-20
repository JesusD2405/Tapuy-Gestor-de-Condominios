<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EMPRESA;

class EmpresaController extends Controller
{
    public function visualizar()
    {
        $empresa = EMPRESA::all();

        return view ('admin.visualizar.empresa')->with("empresa", $empresa);
    }

    public function agregar()
    {
        return view('admin.agregar.empresa');
    }

    public function create(Request $request)
    {
    	$empresa = new EMPRESA($request->all());
		
    	$empresa-> save();

    	return redirect('admin/home');
    }

    public function modificar()
    {
        $empresa = EMPRESA::all();

        return view ('admin.modificar.empresa')->with("empresa", $empresa);
    }

    public function update(Request $request)
    {
        $rif = $request->rif;

        $empresa = EMPRESA::where('rif',$rif)->first();

        $empresa->rif= $request->nuevoRif;
        $empresa->nombre= $request->nombre;
        $empresa->estado= $request->estado;
        $empresa->ciudad= $request->ciudad;
        $empresa->tipo_servicio= $request->tipo_serv;
        $empresa->nomina= $request->empleados;

        $empresa-> save();

        return redirect('admin/home');
    }

    public function eliminar()
    {
        $empresa = EMPRESA::all();
        
        return view ('admin.eliminar.empresa')->with("empresa", $empresa);    
    }

    public function delete(Request $request)
    {
        $nombre = $request->nombreEmpresa;

        $empresa = EMPRESA::where('nombre',$nombre)->delete();

        return redirect('admin/home');
    }

}


