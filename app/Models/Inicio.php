<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inicio extends Model
{
    use HasFactory;
    protected $table ="tb_inicio";
    protected $primaryKey ="id";
    protected $fillable =[
        'titulo',
        'mision',
        'vision',
        'valores',
        'descripcion',
        'direccion',
        'direccion',
        'telefono',
        'email',
        'imagen',
    ];
}
