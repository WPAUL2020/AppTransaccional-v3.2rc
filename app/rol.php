<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    protected $table="rol";
    protected $primaryKey="ID_ROL";
    public $incrementing = true;
    public $timestamps = false;
}
