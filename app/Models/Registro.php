<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Registro extends Model
{
    use HasFactory;
    public function dia(): HasMany{
        return $this->hasMany(Dia::class);
    }
    public function carro(): BelongsTo{
        return $this->belongsTo(Carro::class);
    }
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function ruta(): BelongsTo{
        return $this->belongsTo(Ruta::class);
    }
    
}
