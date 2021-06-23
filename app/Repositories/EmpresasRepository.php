<?php

namespace App\Repositories;

use App\Models\Empresas;
use App\Repositories\BaseRepository;

/**
 * Class EmpresasRepository
 * @package App\Repositories
 * @version May 18, 2021, 11:45 pm UTC
*/

class EmpresasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Empresas::class;
    }
}
