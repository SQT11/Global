<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Persona extends Model
{
    use HasFactory;

    protected $fillable = [
        'per_nombre_completo',
        'per_cargo',
        'per_telefono',
        'per_email',
    ];

    /**
     * Get the obras associated with the Persona
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function obras(): HasMany
    {
        return $this->hasMany(Obra::class, 'obr_id');
    }
}
