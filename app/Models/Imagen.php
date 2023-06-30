<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Imagen extends Model
{
    use HasFactory;

    public function cuentas(){
        return $this->belongsTo(Nivel::class,'cuenta_user','user');
    }
}
