<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'cod';
    protected $fillable = ['cod', 'telefono', 'correo','departamento','provincia','distrito'];
}
