<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Filament\Panel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Multa extends Model 
{
    use HasFactory;
    public function carro(): BelongsTo{
        return $this->belongsTo(Carro::class);
    }
    public function ruta(): BelongsTo{
        return $this->belongsTo(Ruta::class);
    }
    
}
// class User extends Authenticatable implements FilamentUser
// {
//     // ...
 
//     public function canAccessPanel(Panel $panel): bool
//     {
//         if ($panel->getId() === 'admin') {
//         return str_ends_with($this->email, 'vicente@hotmail.com');
//     }
//     return true;
// }
    
//}
