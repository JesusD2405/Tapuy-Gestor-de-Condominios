<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DIRECCION extends Model
{
    protected $table = "DIRECCION";

    public $incrementing = false; 	// Para No incrementar por defecto 
	public $timestamps = false;		// Para No Manejar fecha de creacion y actualizacion por defecto 
	public $primaryKey = 'id';	// Definimos nuestra clave primaria

	protected $fillable = ['direccion', 'id_propiedad']; 

}
