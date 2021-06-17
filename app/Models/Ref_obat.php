<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_obat extends Model
{
    protected $table = "ref_obat";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'nama', 'harga', 'created_by', 'created_at','edited_by', 'edited_at'] ;
    public $timestamps = false ;
    use HasFactory;
}
