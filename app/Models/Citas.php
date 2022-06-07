<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    use HasFactory;
    protected $table ="tb_citas";
    protected $primaryKey ="id";
    protected $fillable =[
        'hora_cita',
        'cita',
        'usuario',
        'asunto',
        'id_doctor',
        'updated_at',
    ];
}
