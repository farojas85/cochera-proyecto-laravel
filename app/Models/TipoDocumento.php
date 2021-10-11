<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Relations\HasMany;

class TipoDocumento extends Model
{
    use HasFactory;

    public function personas(): HasMany
    {
        return $this->hasMany(Persona::class);
    }
}
