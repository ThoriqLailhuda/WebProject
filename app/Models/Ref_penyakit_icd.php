<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_penyakit_icd extends Model
{
    protected $table = "ref_penyakit_icd";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'kode', 'nama', 'created_by', 'created_at','edited_by', 'edited_at'] ;
    public $timestamps = false ;
    use HasFactory;
}
