<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    use HasFactory;
    protected $table ="tb_historial";
    protected $primaryKey ="id";
    protected $fillable =[
        'id_cita',
        'descripcion',
        'prescripciones',
        'observaciones',
        'procedimiento',
        'receta',
        'condicion',
    ];
}
