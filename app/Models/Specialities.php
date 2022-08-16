<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialities extends Model
{
    use HasFactory;
    protected $table ="tb_specialities";
    protected $primaryKey ="id";
    protected $fillable =[
        'nombre',
        'descripcion',
        'imagen',
    ];
}
