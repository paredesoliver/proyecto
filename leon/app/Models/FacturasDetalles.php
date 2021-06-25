<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FacturasDetalles
 * @package App\Models
 * @version May 30, 2021, 1:40 pm UTC
 *
 * @property \App\Models\Producto $idProd
 * @property \App\Models\Factura $idFac
 * @property integer $id_fac
 * @property integer $id_prod
 * @property integer $cantidad
 * @property string $descripcion
 * @property string $precio_unitario
 * @property string $descuento_producto
 * @property string $destino
 */
class FacturasDetalles extends Model
{


    public $table = 'factura_detalle';
    protected $primaryKey= 'id_facde';
    public $timestamps = false;




    public $fillable = [
        'id_fac',
        'id_prod',
        'cantidad',
        'descripcion',
        'precio_unitario',

        'destino'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_facde' => 'integer',
        'id_fac' => 'integer',
        'id_prod' => 'integer',
        'cantidad' => 'integer',
        'descripcion' => 'string',
        'precio_unitario' => 'numeric',

        'destino' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_fac' => 'nullable|integer',
        'id_prod' => 'nullable|integer',
        'cantidad' => 'nullable|integer',
        'descripcion' => 'nullable|string|max:100',
        'precio_unitario' => 'nullable|number|max:10',
        'destino' => 'nullable|string|max:200'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idProd()
    {
        return $this->belongsTo(\App\Models\Producto::class, 'id_prod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idFac()
    {
        return $this->belongsTo(\App\Models\Factura::class, 'id_fac');
    }
}
