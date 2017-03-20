<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CUENTA extends Model
{
	protected $table = "CUENTA";
	
	public $incrementing = false; 	// Para No incrementar por defecto 
	public $timestamps = false;		// Para No Manejar fecha de creacion y actualizacion por defecto 
	public $primaryKey = 'user';	// Definimos nuestra clave primaria

	protected $fillable = ['user', 'password', 'nombre', 'apellido', 'rol']; // Para Traer datos que pido.. Campos que pueden retornados.

}
