<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $table ="tb_productos";
    protected $primaryKey ="id";
    protected $fillable =[
        'nombre',
        'detalles',
        'precio',
        'imagen',
    ];
}
