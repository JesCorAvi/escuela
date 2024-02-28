<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Nota extends Model
{
    use HasFactory;
    protected $fillable = ["alumno_id", "asignatura_id", "nota", "trimestre"];

    public function alumno(): BelongsTo
    {
        return $this->belongsTo(Alumno::class);
    }
    public function asignatura(): BelongsTo
    {
        return $this->belongsTo(Asignatura::class);
    }
}
