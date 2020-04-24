<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table="cargo";
    protected $primaryKey="ID_CARGO";
    public $incrementing = true;
    public $timestamps = false;
}
