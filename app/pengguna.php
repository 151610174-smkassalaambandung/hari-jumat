<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['nama_lengkap','alamat','nohp'];
    protected $visibel = ['nama_lengkap','alamt','nohp'];
    public $timestamps = true;
}

