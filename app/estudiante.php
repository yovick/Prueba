<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    public $table="estudiantes";
	public $timestamps = false; 
    protected $fillable = [
        'nombre','apellido','cedula','sexo','tipo_id'
    ];
}
