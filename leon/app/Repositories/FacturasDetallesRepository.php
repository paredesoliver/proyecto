<?php

namespace App\Repositories;

use App\Models\FacturasDetalles;
use App\Repositories\BaseRepository;

/**
 * Class FacturasDetallesRepository
 * @package App\Repositories
 * @version May 30, 2021, 1:40 pm UTC
*/

class FacturasDetallesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_fac',
        'id_prod',
        'cantidad',
        'descripcion',
        'precio_unitario',
        'destino',
        'iva',
        'descuento'
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
        return FacturasDetalles::class;
    }
}
