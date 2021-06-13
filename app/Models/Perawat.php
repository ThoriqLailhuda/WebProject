<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perawat extends Model
{
    protected $table = "perawat";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'nama', 'no_telp', 'created_by', 'created_at','edited_by', 'edited_at'] ;
    public $timestamps = false ;
    use HasFactory;
}
