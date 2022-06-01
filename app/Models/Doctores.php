<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctores extends Model
{
    use HasFactory;
    protected $table ="tb_doctores";
    protected $primaryKey ="id";
    protected $fillable =[
        'nombre',
        'numero',
        'id_especialidad',
    ];
    

}
