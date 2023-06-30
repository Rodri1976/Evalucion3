<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
/**
 * Class Imagene
 *
 * @property $id
 * @property $titulo
 * @property $archivo
 * @property $baneada
 * @property $motivo_ban
 * @property $cuenta_user
 * @property $created_at
 * @property $updated_at
 *
 * @property Cuenta $cuenta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Imagene extends Model
{
    use HasFactory;
    static $rules = [
		'titulo' => 'required',
		'archivo' => 'required',
		'baneada' => 'required',
		'motivo_ban' => 'required',
		'cuenta_user' => 'required',
    ];

    protected $perPage = 20;

    //protected $table = 'imagenes';
    //protected $primaryKey = 'id';
    //public $incrementing = true;
    //protected $fillable = ['titulo', 'archivo', 'baneada', 'motivo_ban', 'cuenta_user'];
    //public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    //protected $fillable = ['titulo','archivo','baneada','motivo_ban','cuenta_user'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cuentas()
    {
        return $this->hasOne('App\Models\Cuenta', 'user', 'cuenta_user');
    }
    
    public function cuenta()
    {
      return $this->belongsTo(Nivel::class,'cuenta_user','user');
    }
}
