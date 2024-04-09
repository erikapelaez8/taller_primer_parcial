<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bicicleta extends Model
{
    use HasFactory;

    protected $fillable = [
        'marca',
        'modelo',
        'fecha_fabricacion',
        'precio',
        'descripcion',
        'disponible',
        'cantidad_disponible',
        'estado',
    ];
}
