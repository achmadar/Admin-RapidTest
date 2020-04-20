<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RS extends Model
{	
    protected $table = 'tb_rumahsakit';

    protected $fillable = [
        "nama_rs",
        "alamat_rs",
        "notelp_rs",
        "jadwal_rs"
    ];
}
