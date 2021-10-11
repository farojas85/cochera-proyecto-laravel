<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Relations\HasOne;

class Persona extends Model
{
    use HasFactory;

    public function tipo_documento(): BelongsTo
    {
        return $this->belongsTo(TipoDocumento::class);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
