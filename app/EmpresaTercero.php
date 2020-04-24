<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpresaTercero extends Model
{
    protected $table="empresa_tercero";
    protected $primaryKey="ID_EMPRESA_TERCERO";
    public $incrementing = true;
    public $timestamps = false;
}
