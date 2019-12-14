<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class semestre extends Model
{
    public $table="semestres";
	public $timestamps = false; 
    protected $fillable = [
        'semestre','paralelo'
    ];
}
