<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    

    // Apuntar a una tabla
	protected $table='grupo';
	//Especificar la clave primaria
	protected $primaryKey='idgrupo';

	//Deshabilitar marcado de registros
	public $timestamps=false;
	public $incrementing = false;

	//Defino los campos que contendran algun valor

	protected $fillable=[
		'idgrupo',
		'periodo',
		'idcarrera',
		'cuatrimestre',
		'grupo'
	];

}
