<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TITULAR extends Model
{
    protected $table = "TITULAR";

    public $incrementing = false; 	// Para No incrementar por defecto 
	public $timestamps = false;		// Para No Manejar fecha de creacion y actualizacion por defecto 
	public $primaryKey = 'ci';		// Definimos nuestra clave primaria

	protected $fillable = ['ci', 'nombre', 'apellido', 'condominio', 'telefono', 'tipo_propiedad', 'id_propiedad'];

}
