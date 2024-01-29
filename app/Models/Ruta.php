<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ruta extends Model
{
    use HasFactory;
    public function dia(): HasMany{
        return $this->hasMany(Dia::class);
    }
    public function estimado(): HasMany{
        return $this->hasMany(Estimado::class);
    }
}
