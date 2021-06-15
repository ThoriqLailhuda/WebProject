<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = "obat";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'id_periksa_poli', 'id_obat', 'harga', 'jml', 'created_by', 'created_at','edited_by', 'edited_at'] ;
    public $timestamps = false ;
    use HasFactory;
}
