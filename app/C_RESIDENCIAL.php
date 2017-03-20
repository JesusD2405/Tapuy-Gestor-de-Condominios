<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class C_RESIDENCIAL extends Model
{
    protected $table = "C_RESIDENCIAL";

    public $incrementing = false; 	// Para No incrementar por defecto 
	public $timestamps = false;		// Para No Manejar fecha de creacion y actualizacion por defecto 
	public $primaryKey = 'id';		// Definimos nuestra clave primaria

	protected $fillable = ['nombre', 'condominio', 'cant_casas', 'cant_aptos', 'cant_thouse', 'cant_titulares']; 
	
}
