<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Empresas
 * @package App\Models
 * @version May 18, 2021, 11:45 pm UTC
 *
 * @property string $razon_social
 * @property string $ruc
 * @property string $nombre_comercial
 * @property string $telefono_convencional
 * @property string $telefono_movil
 * @property string $correo
 * @property string $direccion
 * @property string $sitio_web
 */
class Empresas extends Model
{


    public $table = 'empresa';
    protected $primaryKey= 'id_empr';
    public $timestamps = false;
    





    public $fillable = [
        'razon_social',
        'ruc',
        'nombre_comercial',
        'telefono_convencional',
        'telefono_movil',
        'correoo',
        'direccion',
        'sitio_web'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_empr' => 'integer',
        'razon_social' => 'string',
        'ruc' => 'string',
        'nombre_comercial' => 'string',
        'telefono_convencional' => 'string',
        'telefono_movil' => 'string',
        'correoo' => 'string',
        'direccion' => 'string',
        'sitio_web' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'razon_social' => 'nullable|string|max:200',
        'ruc' => 'nullable|string|max:15',
        'nombre_comercial' => 'nullable|string|max:200',
        'telefono_convencional' => 'nullable|string|max:20',
        'telefono_movil' => 'nullable|string|max:20',
        'correoo' => 'nullable|string|max:50',
        'direccion' => 'nullable|string|max:200',
        'sitio_web' => 'nullable|string|max:200'
    ];

    
}
