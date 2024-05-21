<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Herramienta extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'her_nombre',
        'her_codigo',
        'her_estado',
        'her_descripcion',
    ];

    /**
     * Get the obras associated with the Herramienta
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function obras(): HasMany
    {
        return $this->hasMany(Obra::class, 'obr_id');
    }
}
