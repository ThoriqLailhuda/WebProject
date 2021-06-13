<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tindakan extends Model
{
    protected $table = "tindakan";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'id_periksa_poli', 'id_tindakan', 'harga', 'jml', 'created_by', 'created_at','edited_by', 'edited_at'] ;
    public $timestamps = false ;
    use HasFactory;
}
