<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Asignatura extends Model
{
    protected $fillable = ["denominacion", "numero_de_trimestres"];

    use HasFactory;
    public function notas(): HasMany
    {
        return $this->hasMany(Nota::class);
    }
}
