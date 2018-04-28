<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPeserta extends Model
{
    protected $table="detail_peserta";
    protected $primaryKey="id_detail";
    public $timestamps=false;
}
