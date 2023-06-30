<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Cuenta;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Perfile
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Cuenta[] $cuentas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Perfile extends Model
{
    use HasFactory;
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cuentas()
    {
        return $this->hasMany('App\Models\Cuenta', 'perfil_id', 'id');
    }
    

}
