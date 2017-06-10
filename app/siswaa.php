<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswaa extends Model
{
    //
protected $table='siswaas';
protected $fillable=['nama','jk','alamat'];
protected $visible=['nama','jk','alamat'];
public $timestamps=true;
}
