<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\C_COMERCIAL;
use App\CONDOMINIO;

class C_ComercialController extends Controller
{
    public function visualizar()
    {
        $centroComercial = C_COMERCIAL::all();

        return view ('admin.visualizar.centroComercial')->with("centroComercial", $centroComercial);
    }

    public function agregar()
    {
        $condominio = CONDOMINIO::all();

        return view('admin.agregar.centroComercial')->with("condominio", $condominio);
    }

    public function create(Request $request)
    {
        $CComercial = new C_COMERCIAL($request->all());

    	$CComercial->save();

    	return redirect('admin/home');
    }

    public function modificar()
    {
        $centroComercial = C_COMERCIAL::all();

        return view ('admin.modificar.centroComercial')->with("centroComercial", $centroComercial);
    }

    public function update(Request $request)
    {
        $nombre = $request->nombreCComercial;

        $centroComercial = C_COMERCIAL::where('nombre',$nombre)->first();

        $centroComercial->nombre= $request->nombre;
        $centroComercial->cant_mtiendas= $request->tiendas;
        $centroComercial->cant_locales= $request->locales;
        $centroComercial->cant_titulares= $request->titulares;

        $centroComercial->save();

        return redirect('admin/home');
    }

    public function eliminar()
    {
        $centroComercial = C_COMERCIAL::all();
        
        return view ('admin.eliminar.centroComercial')->with("centroComercial", $centroComercial);    
    }

    public function delete(Request $request)
    {
        $nombre = $request->nombreCComercial;

        $centroComercial = C_COMERCIAL::where('nombre',$nombre)->delete();

        return redirect('admin/home');
    }
}
