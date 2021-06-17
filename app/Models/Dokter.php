<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = "dokter";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'nama', 'id_poli_bagian', 'no_telp', 'harga', 'created_by', 'created_at','edited_by', 'edited_at'] ;
    public $timestamps = false ;
    use HasFactory;
}
