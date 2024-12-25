<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo_actividad',
        'nombre',
        'ruc',
        'nombre_comercial',
        'numero_decreto',
        'logo',
        'email',
        'telefono',
        'direccion',
        'moneda',
        'mision',
        'vision',
        'descripcion',
        'facebook',
        'youtube',
        'whatsapp',
        'nombre_gerente',
        'dni_gerente',
        'telefono_gerente',
        'correo_gerente',
        'direccion_gerente',
        'fecha_ingreso_gerente',
    ];
}
