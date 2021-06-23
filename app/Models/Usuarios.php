<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Usuarios
 * @package App\Models
 * @version May 13, 2021, 12:48 pm UTC
 *
 * @property string $name
 * @property string $email
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 */
class Usuarios extends Model
{


    
    public $table = 'nomina';
    protected $primaryKey= 'id_nomi';
    public $timestamps = false;


    public $fillable = [
        'apellidos',
        'nombre',
        'telefono_movil',
        'email',
        'email_verified_at',
        'cargo',
        'usuario',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'apellidos' => 'string',
        'nombre' => 'string',
        'telefono_movil' => 'string',
        'email' => 'string',
        'cargo' => 'string',
        'usuario' => 'string',
        'password' => 'string'

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'apellidos' => 'required|string|max:255',
        'nombre' => 'required|string|max:255',
        'telefono_movil' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'cargo' => 'required|string|max:255',
        'usuario' => 'required|string|max:255',
        'password' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
