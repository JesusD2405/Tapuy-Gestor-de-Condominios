<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CONDOMINIO extends Model
{
    protected $table = "CONDOMINIO";

    public $incrementing = false; 	// Para No incrementar por defecto 
	public $timestamps = false;		// Para No Manejar fecha de creacion y actualizacion por defecto 
	public $primaryKey = 'rif';		// Definimos nuestra clave primaria

	protected $fillable = ['rif', 'nombre', 'estado', 'ciudad', 'cant_comerciales', 'cant_residenciales', 'cant_titulares']; 

}
