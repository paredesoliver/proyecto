<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Productos
 * @package App\Models
 * @version May 24, 2021, 6:42 am UTC
 *
 * @property \App\Models\ProveedoresCliente $idProcli
 * @property \App\Models\Nomina $idNomi
 * @property integer $id_procli
 * @property integer $id_nomi
 * @property string $codigo
 * @property string $pvp
 * @property string $nombre_descripcion
 * @property string $marca
 * @property string $modelo
 * @property string $material
 * @property string $nivel_proteccion
 * @property string $tamano
 * @property string $capacidad
 * @property string $accesos
 * @property string $aplicacion
 * @property string $tipo_conector
 * @property string $estandar
 * @property string $numero_hilos
 * @property string $vanos_span
 * @property string $unidad_medida
 * @property integer $cantidad
 */
class Productos extends Model
{


    public $table = 'producto';
    protected $primaryKey= 'id_prod';
    public $timestamps = false;




    public $fillable = [
        'id_procli',
        'id_nomi',
        'codigo',
        'pvp',
        'nombre_descripcion',
        'marca',
        'modelo',
        'material',
        'nivel_proteccion',
        'tamano',
        'capacidad',
        'accesos',
        'aplicacion',
        'tipo_conector',
        'estandar',
        'numero_hilos',
        'vanos_span',
        'unidad_medida'

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_prod' => 'integer',
        'id_procli' => 'integer',
        'id_nomi' => 'integer',
        'codigo' => 'string',
        'pvp' => 'string',
        'nombre_descripcion' => 'string',
        'marca' => 'string',
        'modelo' => 'string',
        'material' => 'string',
        'nivel_proteccion' => 'string',
        'tamano' => 'string',
        'capacidad' => 'string',
        'accesos' => 'string',
        'aplicacion' => 'string',
        'tipo_conector' => 'string',
        'estandar' => 'string',
        'numero_hilos' => 'string',
        'vanos_span' => 'string',
        'unidad_medida' => 'string'

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_procli' => 'required|integer',
        'id_nomi' => 'integer',
        'codigo' => 'nullable|string|max:20',
        'pvp' => 'nullable|string|max:20',
        'nombre_descripcion' => 'nullable|string|max:100',
        'marca' => 'nullable|string|max:50',
        'modelo' => 'nullable|string|max:50',
        'material' => 'nullable|string|max:50',
        'nivel_proteccion' => 'nullable|string|max:50',
        'tamano' => 'nullable|string|max:50',
        'capacidad' => 'nullable|string|max:50',
        'accesos' => 'nullable|string|max:50',
        'aplicacion' => 'nullable|string|max:50',
        'tipo_conector' => 'nullable|string|max:50',
        'estandar' => 'nullable|string|max:50',
        'numero_hilos' => 'nullable|string|max:50',
        'vanos_span' => 'nullable|string|max:50',
        'unidad_medida' => 'nullable|string|max:50'

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idProcli()
    {
        return $this->belongsTo(\App\Models\ProveedoresCliente::class, 'id_procli');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idNomi()
    {
        return $this->belongsTo(\App\Models\Nomina::class, 'id_nomi');
    }
}
