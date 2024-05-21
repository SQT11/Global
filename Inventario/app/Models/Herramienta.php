<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Herramienta extends Model
{
    protected $fillable = [
        'her_nombre',
        'her_codigo',
        'her_estado',
        'her_descripcion',
        'her_obr_id',

    ];


    /**
     * Get the obra associated with the Herramienta
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function obra(): HasMany
    {
        return $this->hasMany(Obra::class, 'obr_id');
    }

}
