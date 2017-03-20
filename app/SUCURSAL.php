<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SUCURSAL extends Model
{
	protected $table = "SUCURSAL";
	
	public $incrementing = false; 	// Para No incrementar por defecto 
	public $timestamps = false;		// Para No Manejar fecha de creacion y actualizacion por defecto
	public $primaryKey = 'id';	// Definimos nuestra clave primaria
	
	protected $fillable = ['estado', 'ciudad']; // Para Traer datos que pido.. Campos que pueden retornados.    
}
