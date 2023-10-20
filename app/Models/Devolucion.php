<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devolucion extends Model
{
    use HasFactory;

    public function prestamo(): HasMany
    {
        return $this->hasMany(prestamo::class);
    }
    
}
