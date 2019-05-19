<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    protected $table = 'empresas';
    protected $fillable = array('EmpresaID','Nombre','Direccion','Tipo_contrato','Usuario', 'Contraseña', 'Email', 'created_at', 'updated_at' );
}
