<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoIdentificacion extends Model
{
    protected $table="tipo_identificacion";
    protected $primaryKey="ID_TIPO_INDENTIFICACION";
    public $incrementing = true;
    public $timestamps = false;
}
