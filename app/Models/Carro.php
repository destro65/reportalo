<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Carro extends Model
{
    use HasFactory;
    public function multa(): HasMany{
        return $this->hasMany(Multa::class);
    }
    public function dia(): BelongsTo{
        return $this->belongsTo(Dia::class);
    }
}
