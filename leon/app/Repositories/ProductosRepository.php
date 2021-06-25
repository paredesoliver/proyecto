<?php

namespace App\Repositories;

use App\Models\Productos;
use App\Repositories\BaseRepository;

/**
 * Class ProductosRepository
 * @package App\Repositories
 * @version May 24, 2021, 6:42 am UTC
*/

class ProductosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Productos::class;
    }
}
