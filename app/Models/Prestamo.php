<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    public function usuario(): HasMany
    {
        return $this->hasMany(usuario::class);
    }
    public function libro(): HasMany
    {
        return $this->hasMany(Libro::class);
    }
}
