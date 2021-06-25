<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProveedoresClientes
 * @package App\Models
 * @version May 21, 2021, 3:24 am UTC
 *
 * @property \App\Models\Nomina $idNomi
 * @property integer $id_nomi
 * @property string $tipo_identificacion
 * @property integer $actividad
 * @property integer $tipo_provedor
 * @property string $razon_social
 * @property string $nombre_comercial
 * @property string $fec_nac
 * @property string $telefono_movil
 * @property string $telefono_convencional
 * @property string $correo
 * @property string $direccion
 * @property integer $forma_pago

 * @property string $observaciones
 */
class ProveedoresClientes extends Model
{

    public $table = 'proveedores_clientes';
    protected $primaryKey= 'id_procli';
    public $timestamps = false;




    public $fillable = [
        'id_nomi',
        'tipo_identificacion',
        'actividad',
        'tipo_provedor',
        'razon_social',
        'nombre_comercial',
        'fec_nac',
        'telefono_movil',
        'telefono_convencional',
        'correo',
        'direccion',
        'forma_pago',

        'observaciones'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_procli' => 'integer',
        'id_nomi' => 'integer',
        'tipo_identificacion' => 'string',
        'actividad' => 'integer',
        'tipo_provedor' => 'integer',
        'razon_social' => 'string',
        'nombre_comercial' => 'string',
        'fec_nac' => 'date',
        'telefono_movil' => 'string',
        'telefono_convencional' => 'string',
        'correo' => 'string',
        'direccion' => 'string',
        'forma_pago' => 'integer',

        'observaciones' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_nomi' => 'integer',
        'tipo_identificacion' => 'nullable|string|max:15',
        'actividad' => 'nullable|integer',
        'tipo_provedor' => 'nullable|integer',
        'razon_social' => 'nullable|string|max:100',
        'nombre_comercial' => 'nullable|string|max:100',
        'fec_nac' => 'nullable',
        'telefono_movil' => 'nullable|string|max:20',
        'telefono_convencional' => 'nullable|string|max:20',
        'correo' => 'nullable|string|max:100',
        'direccion' => 'nullable|string|max:200',
        'forma_pago' => 'nullable|integer',

        'observaciones' => 'nullable|string|max:500'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idNomi()
    {
        return $this->belongsTo(\App\Models\Nomina::class, 'id_nomi');
    }
}
