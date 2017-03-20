<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\CUENTA;

class CuentaController extends Controller
{

    public function agregar()
    {
        return view('admin.agregar.cuenta');
    }

    public function create(Request $request)
    {
    	$cuenta = new CUENTA($request->all());

        //$cuenta->password= Crypt::encrypt($request->password);

    	$cuenta->save();

    	return redirect('admin/home');
    }

    public function modificar()
    {
        $cuenta = CUENTA::all();

        return view ('admin.modificar.cuenta')->with("cuenta", $cuenta);
    }

    public function update(Request $request)
    {
        $user = $request->user;

        $cuenta = CUENTA::where('user',$user)->first();
   
        $cuenta->user= $request->user;
        $cuenta->password= $request->password;

        $cuenta-> save();

        return redirect('admin/home');
    }

    public function eliminar()
    {
        $cuenta = CUENTA::all();
        
        return view ('admin.eliminar.cuenta')->with("cuenta", $cuenta);    
    }

    public function delete(Request $request)
    {
        $user = $request->user;

        $cuenta = CUENTA::where('user',$user)->delete();

        return redirect('admin/home');
    }
}
