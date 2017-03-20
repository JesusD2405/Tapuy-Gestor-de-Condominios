<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\CUENTA;


class LoginController extends Controller
{

    public function validar(Request $request)
    {  	
        $user = $request->user;
        $password = $request->password;

        $query = CUENTA::where('user', $user)->first();

        //dd($query->password);

        //$descrypted = Crypt::decrypt($query->password); 

        //echo $descrypted;

        if ($query) 
        {
            if ($query->user == $user && $query->password == $password)
            {
                return redirect('admin/home');
            }
            else
            {
                alert()->warning('Imposible Inciar Sesion', 'Usuario o Contraseña Invalidos')->autoclose(3000);
                return redirect('/');
            }   
        }
        else
        {
            alert()->error('Imposible Inciar Sesion', 'No Existe Esa Cuenta')->autoclose(3000);
            return redirect('/');
        }

        
    }

    public function principal()
    {
        return view("admin.principal");
    }


}
