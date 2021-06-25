<?php

namespace App\Repositories;

use App\Models\Usuarios;
use App\Repositories\BaseRepository;

/**
 * Class UsuariosRepository
 * @package App\Repositories
 * @version May 13, 2021, 12:48 pm UTC
*/

class UsuariosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'apellidos',
        'nombre',
        'telefono_movil',
        'email',
        'cargo',
        'usuario',
        'password'

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
        return Usuarios::class;
    }
}
