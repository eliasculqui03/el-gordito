<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'empresa_id',
        'tipo_establecimiento',
        'fecha_inicio_operaciones',
        'fecha_final_operaciones',
        'direccion',
        'telefono',
        'correo',
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
}
