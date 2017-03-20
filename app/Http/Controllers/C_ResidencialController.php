<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\C_RESIDENCIAL;
use App\CONDOMINIO;

class C_ResidencialController extends Controller
{
    public function visualizar()
    {
        $conjuntoResidencial = C_RESIDENCIAL::all();

        return view ('admin.visualizar.conjuntoResidencial')->with("conjuntoResidencial", $conjuntoResidencial);
    }

    public function agregar()
    {
        $condominio = CONDOMINIO::all();

        return view('admin.agregar.conjuntoResidencial')->with("condominio", $condominio);
    }

    public function create(Request $request)
    {
    	$CResidencial = new C_RESIDENCIAL($request->all());

    	$CResidencial->save();

    	return redirect('admin/home');
    }

    public function modificar()
    {
        $conjuntoResidencial = C_RESIDENCIAL::all();

        return view ('admin.modificar.conjuntoResidencial')->with("conjuntoResidencial", $conjuntoResidencial);
    }

    public function update(Request $request)
    {
        $nombre = $request->nombreCResidencial;

        $CResidencial = C_RESIDENCIAL::where('nombre',$nombre)->first();

        $CResidencial->nombre= $request->nombre;
        $CResidencial->cant_casas= $request->casas;
        $CResidencial->cant_aptos= $request->aptos;
        $CResidencial->cant_thouse= $request->thouses;
        $CResidencial->cant_titulares= $request->residentes;

        $CResidencial->save();
        return redirect('admin/home');
    }

    public function eliminar()
    {
        $conjuntoResidencial = C_RESIDENCIAL::all();
        
        return view ('admin.eliminar.conjuntoResidencial')->with("conjuntoResidencial", $conjuntoResidencial);    
    }

    public function delete(Request $request)
    {
        $nombre = $request->nombreCResidencial;

        $conjuntoResidencial = C_RESIDENCIAL::where('nombre',$nombre)->delete();

        return redirect('admin/home');
    }

}
