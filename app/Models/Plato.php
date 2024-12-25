<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Plato extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'categoria',
        'area_id',
        'descripcion',
        'estado'
    ];

    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class);
    }
}
