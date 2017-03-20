<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class C_COMERCIAL extends Model
{
    protected $table = "C_COMERCIAL";

    public $incrementing = false; 	// Para No incrementar por defecto 
	public $timestamps = false;		// Para No Manejar fecha de creacion y actualizacion por defecto 
	public $primaryKey = 'id';		// Definimos nuestra clave primaria

	protected $fillable = ['nombre', 'condominio', 'cant_mtiendas', 'cant_locales', 'cant_titulares']; 

}
