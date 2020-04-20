<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Antrian extends Model
{	
    protected $table = 'tb_antrian';

    protected $fillable = [
    	"id",
        "nama_pasien",
    	"nama_rs",
    	"jadwalpilihan",
    	"keluhan",
    	"status"
    ];
}
