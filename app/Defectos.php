<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Defectos extends Model
{
    protected $table = 'defectos';
    protected $fillable = array('DefectoID','detalle','severidad','evidencia','estado', 'sitiosweb_id', 'created_at', 'updated_at' );
}
