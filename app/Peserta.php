<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table="peserta";
    protected $primaryKey="id_peserta";
    public $timestamps=false;
}
