<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CONDOMINIO;
use App\SUCURSAL;

class CondominioController extends Controller
{

    public function visualizar()
    {
        $condominio = CONDOMINIO::all();

        return view('admin.visualizar.condominio')->with('condominio', $condominio);
    }

    public function agregar()
    {
        $sucursal = SUCURSAL::all();

        return view('admin.agregar.condominio')->with("sucursal", $sucursal);
    }

    public function create(Request $request)
    {
    	$condominio = new CONDOMINIO($request->all());

    	$condominio->save();
    
    	return redirect('admin/home');
    }

    public function modificar()
    {
        $condominio = CONDOMINIO::all();

        return view ('admin.modificar.condominio')->with("condominio", $condominio);
    }

    public function update(Request $request)
    {
        $rif = $request->rif;

        $condominio = CONDOMINIO::where('rif',$rif)->first();

        $condominio->rif= $request->nuevoRif;
        $condominio->nombre= $request->nombre;
        $condominio->estado= $request->estado;
        $condominio->ciudad= $request->ciudad;
        $condominio->cant_comerciales= $request->comerciales;
        $condominio->cant_residenciales= $request->residencias;
        $condominio->cant_titulares= $request->propietarios;

        $condominio-> save();

        return redirect('admin/home');
    }

    public function eliminar()
    {
        $condominio = CONDOMINIO::all();
        
        return view ('admin.eliminar.condominio')->with("condominio", $condominio);    
    }

    public function delete(Request $request)
    {
        $rif = $request->rif;

        $condominio = CONDOMINIO::where('rif',$rif)->delete();

        return redirect('admin/home');
    }

}
