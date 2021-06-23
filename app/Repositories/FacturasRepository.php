<?php

namespace App\Repositories;

use App\Models\Facturas;
use App\Repositories\BaseRepository;

/**
 * Class FacturasRepository
 * @package App\Repositories
 * @version May 30, 2021, 1:28 pm UTC
*/

class FacturasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_empr',
        'id_nomi',
        'id_procli',
        'numfac',
        'fecha'
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
        return Facturas::class;
    }
}
