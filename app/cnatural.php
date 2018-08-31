<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cnatural extends Model
{
    protected $table = 'cnatural';
    protected $primaryKey = 'cod_cn';
    
    protected $fillable = ['nombre', 'apellido', 'cod_cn'];
}
