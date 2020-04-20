<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
	protected $table = 'tb_pasien';

    protected $fillable = [
        "username",
    	"password",
    	"nama_user",
    	"alamat",
    	"nohp_user",
    	"umur",
    	"jeniskelamin",
    	"goldarah",
    	"ttl_pasien",
        "keterangan"
    ];

}
