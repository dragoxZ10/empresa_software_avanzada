<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Persona extends Model
{
    protected $table = 'persona';
    protected $primaryKey = 'nPerCodigo';

    protected $fillable = [
        'cPerApellido', 'cPerNombre', 'cPerDireccion',
        'dPerFecNac', 'cPerSexo', 'nPerSueldo', 'cPerRnd', 'nPerEstado',
    ];

    public function getEdadAttribute(): ?int
    {
        return $this->dPerFecNac ? Carbon::parse($this->dPerFecNac)->age : null;
    }
}
