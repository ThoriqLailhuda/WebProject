<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model ;

class pasiens extends Model
{
    protected $table = "pasien";
    protected $fillable = ['nama', 'no_rm', 'nik', 'alamat', 'tempat_lahir','tgl_lahir', 'rt','rw','id_kelurahan','id_kecamatan','id_kabupaten','id_provinsi','id_user'] ;
    public $timestamps = false ;
    use HasFactory;
}
