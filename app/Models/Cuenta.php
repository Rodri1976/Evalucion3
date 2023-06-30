<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticable;
/**
 * Class Cuenta
 *
 * @property $id
 * @property $user
 * @property $password
 * @property $nombre
 * @property $apellido
 * @property $perfil_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Imagene[] $imagenes
 * @property Perfile $perfile
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cuenta extends Authenticable
{
    use HasFactory;
    //use SoftDeletes;
    static $rules = [
		'user' => 'required',
        'password' =>'required',
		'nombre' => 'required',
		'apellido' => 'required',
		'perfil_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user','password','nombre','apellido','perfil_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function imagenes()
    {
        return $this->hasMany('App\Models\Imagene', 'cuenta_user', 'user');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function perfile()
    {
        return $this->hasOne('App\Models\Perfile', 'id', 'perfil_id');
    }
    

}
