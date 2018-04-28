<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    protected $table="workshop";
    protected $primaryKey="id_workshop";
    public $timestamps=false;
}
