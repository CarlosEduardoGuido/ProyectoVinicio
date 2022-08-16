<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use HasFactory;
    protected $table ="tb_doctors";
    protected $primaryKey ="id";
    protected $fillable =[
        'nombre',
        'especialidad',
        'descripcion',
        'imagen',
        'id_especialidad',
    ];
}
