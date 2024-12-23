<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'caja_id',
        'estado',
    ];

    /**
     * Relación con el modelo Caja.
     */
    public function caja()
    {
        return $this->belongsTo(Caja::class);
    }
}
