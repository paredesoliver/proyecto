<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Facturas
 * @package App\Models
 * @version May 30, 2021, 1:28 pm UTC
 *
 * @property \App\Models\Empresa $idEmpr
 * @property \App\Models\Nomina $idNomi
 * @property \App\Models\ProveedoresCliente $idProcli
 * @property integer $id_empr
 * @property integer $id_nomi
 * @property integer $id_procli
 * @property integer $num_coti
 */
class Facturas extends Model
{


    public $table = 'factura';
    protected $primaryKey= 'id_fac';
    public $timestamps = false;
    




    public $fillable = [
        'id_empr',
        'id_nomi',
        'id_procli',
        'numfac',
        'fecha',
        'iva',
        'descuento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_fac' => 'integer',
        'id_empr' => 'integer',
        'id_nomi' => 'integer',
        'id_procli' => 'integer',
        'numfac' => 'integer',
        'fecha' => 'date',
        'iva' => 'numeric',
        'descuento' => 'numeric'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_empr' => 'nullable|integer',
        'id_nomi' => 'nullable|integer',
        'id_procli' => 'nullable|integer',
        'numfac' => 'nullable|integer',
        'fecha' => 'date'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idEmpr()
    {
        return $this->belongsTo(\App\Models\Empresa::class, 'id_empr');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idNomi()
    {
        return $this->belongsTo(\App\Models\Nomina::class, 'id_nomi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idProcli()
    {
        return $this->belongsTo(\App\Models\ProveedoresCliente::class, 'id_procli');
    }
}
