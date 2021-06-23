<?php

namespace App\Repositories;

use App\Models\ProveedoresClientes;
use App\Repositories\BaseRepository;

/**
 * Class ProveedoresClientesRepository
 * @package App\Repositories
 * @version May 21, 2021, 3:24 am UTC
*/

class ProveedoresClientesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ProveedoresClientes::class;
    }
}
