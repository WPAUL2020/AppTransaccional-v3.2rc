<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table="servicio";
    protected $primaryKey="ID_SERVICIO";
    public $incrementing = true;
    public $timestamps = false;
}
