<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Persona extends Model
{
    protected $fillable = [
    
        'per_nombre_completo',
        'per_cargo',
        'per_telefono',
        'per_email',
        'per_obr_id',

    ];

    /**
     * Get the obra associated with the Persona
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function obra(): HasMany
    {
        return $this->hasMany(Obra::class, 'obr_id');
    }
}
