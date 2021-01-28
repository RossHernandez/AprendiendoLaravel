<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    protected $table = 'empleado';
    protected $fillable = [
        'nombre', 
        'puesto', 
        'email', 
        'edad', 
        'antiguedad', 
        'sueldo', 
        'moneda_sueldo'
    ];
}
