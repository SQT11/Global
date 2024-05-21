<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Obra extends Model
{
    protected $fillable = [
    
        'obr_estado_obra',
        'obr_lugar',
        'obr_fecha_inicio',
        'obr_fecha_fin',
        'obr_encargado',
        'obr_her_id',
        'obr_per_id',
        
    ];

    /**
     * Get the herramienta  that owns the obra
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Herramienta(): BelongsTo
    {
        return $this->belongsTo(Herramienta::class, 'her_id');
    }

    /**
     * Get the Persona  that owns the obra
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Persona(): BelongsTo
    {
        return $this->belongsTo(Persona::class, 'per_id');
    }



}
