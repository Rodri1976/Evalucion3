<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Cuenta;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Perfil extends Model
{

   use HasFactory;
   protected $table = 'perfiles';
}
