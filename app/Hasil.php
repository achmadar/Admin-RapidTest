<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hasil extends Model
{
	use SoftDeletes;
	
    protected $table = 'tb_report';

    protected $fillable = [
        "nama_pasien",
    	"nama_rs",
    	"jadwaltest",
    	"status",
    	"keterangan"
    ];
}
