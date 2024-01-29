<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dia extends Model
{
    use HasFactory;
    public function registro(): BelongsTo{
        return $this->belongsTo(Registro::class);
    }
    public function estimado(): BelongsTo{
        return $this->belongsTo(Estimado::class);
    
    }
}
