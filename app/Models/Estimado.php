<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Estimado extends Model
{
    use HasFactory;
    public function registro(): HasMany{
        return $this->hasMany(Registro::class);
    }
}
