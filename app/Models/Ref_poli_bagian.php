<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_poli_bagian extends Model
{
    protected $table = "ref_poli_bagian";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'nama', 'harga_pendaftaran', 'id_user', 'created_by', 'created_at','edited_by', 'edited_at'] ;
    public $timestamps = false ;
    use HasFactory;
}
