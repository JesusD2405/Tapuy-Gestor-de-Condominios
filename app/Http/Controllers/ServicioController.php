<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SERVICIO;
use App\CONDOMINIO;

class ServicioController extends Controller
{

    public function visualizar()
    {
        $servicio = SERVICIO::all();
        
        return view ('admin.visualizar.servicio')->with("servicio", $servicio);
    }

    public function agregar()
    {
        $condominio = CONDOMINIO::all();
        
        return view('admin.agregar.servicio')->with('condominio', $condominio);
    }

    public function create(Request $request)
    {
    	$servicio = new SERVICIO($request->all());

    	$servicio->save();

    	return redirect('admin/home');
    }    

    public function modificar()
    {
        $servicio = SERVICIO::all();

        return view ('admin.modificar.servicio')->with("servicio", $servicio);
    }

    public function update(Request $request)
    {
        $condominio = $request->nombreCondominio;

        $servicio = SERVICIO::where('condominio', $condominio)->first();
   
        $servicio->tipo_serv= $request->tipo_serv;

        $servicio-> save();

        return redirect('admin/home');
    }

    public function eliminar()
    {
        $servicio = SERVICIO::all();
        
        return view ('admin.eliminar.servicio')->with("servicio", $servicio);    
    }

    public function delete(Request $request)
    {
        $condominio = $request->nombreCondominio;

        $servicio = SERVICIO::where('condominio',$condominio)->delete();

        return redirect('admin/home');
    }

}
