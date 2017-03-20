<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SERVICIO extends Model
{
   	protected $table = "SERVICIO";

   	public $incrementing = false; 	// Para No incrementar por defecto 
	public $timestamps = false;		// Para No Manejar fecha de creacion y actualizacion por defecto 
	public $primaryKey = 'id';		// Definimos nuestra clave primaria

	protected $fillable = ['servicio', 'tipo_serv', 'condominio']; 

}
