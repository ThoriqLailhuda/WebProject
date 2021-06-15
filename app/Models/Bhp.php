<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bhp extends Model
{
    protected $table = "bhp";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'id_bhp', 'harga', 'jml', 'created_by', 'created_at','edited_by', 'edited_at'] ;
    public $timestamps = false ;
    use HasFactory;
}
