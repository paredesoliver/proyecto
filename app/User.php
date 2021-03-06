<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    public $table = 'nomina';
    protected $primaryKey= 'id_nomi';

    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'apellidos',
        'nombre', 
        'telefono_movil',
        'email', 
        'cargo',
        'usuario',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'apellidos'=>'string',
        'nombre'=>'string', 
        'telefono_movil'=>'string',
        'email'=>'string', 
        'cargo'=>'string',
        'usuario'=>'string',
        'password'=>'string',
    ];
}
