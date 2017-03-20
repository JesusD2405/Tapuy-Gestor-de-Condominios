<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EMPRESA extends Model
{
    protected $table = "EMPRESA";

    public $incrementing = false; 	// Para No incrementar por defecto 
	public $timestamps = false;		// Para No Manejar fecha de creacion y actualizacion por defecto 
	public $primaryKey = 'rif';		// Definimos nuestra clave primaria

	protected $fillable = ['rif', 'nombre', 'estado', 'ciudad', 'tipo_servicio', 'nomina']; 

}
