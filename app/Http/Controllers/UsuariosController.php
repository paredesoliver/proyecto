<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsuariosRequest;
use App\Http\Requests\UpdateUsuariosRequest;
use App\Repositories\UsuariosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

use App\User;

class UsuariosController extends AppBaseController
{
    /** @var  UsuariosRepository */
    private $usuariosRepository;

    public function __construct(UsuariosRepository $usuariosRepo)
    {
        $this->usuariosRepository = $usuariosRepo;
    }

    /**
     * Display a listing of the Usuarios.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        
        $usuarios = $this->usuariosRepository->all();
    
        return view('usuarios.index')
            ->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new Usuarios.
     *
     * @return Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created Usuarios in storage.
     *
     * @param CreateUsuariosRequest $request
     *
     * @return Response
     */
    public function store(CreateUsuariosRequest $request)
    {
        $input = $request->all();
        $usuarios = new User();

        $usuarios->apellidos=$input['apellidos'];
        $usuarios->nombre=$input['nombre'];
        $usuarios->telefono_movil=$input['telefono_movil'];
        $usuarios->email=$input['email'];
        $usuarios->cargo=$input['cargo'];
        $usuarios->usuario=$input['usuario'];

        $usuarios->password=bcrypt($input['password']);
        $usuarios->save();

        Flash::success('Usuario Guardado');

        return redirect(route('usuarios.index'));
    }

    /**
     * Display the specified Usuarios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usuarios = $this->usuariosRepository->find($id);

        if (empty($usuarios)) {
            Flash::error('Usuarios not found');

            return redirect(route('usuarios.index'));
        }

        return view('usuarios.show')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for editing the specified Usuarios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usuarios = $this->usuariosRepository->find($id);
        

        if (empty($usuarios)) {
            Flash::error('Usuarios not found');

            return redirect(route('usuarios.index'));
        }

        return view('usuarios.edit')->with('usuarios', $usuarios);
    }

    /**
     * Update the specified Usuarios in storage.
     *
     * @param int $id
     * @param UpdateUsuariosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsuariosRequest $request)
    {
        $usuarios = $this->usuariosRepository->find($id);

        if (empty($usuarios)) {
            Flash::error('Usuarios not found');

            return redirect(route('usuarios.index'));
        }

        $usuarios = $this->usuariosRepository->update($request->all(), $id);

        Flash::success('Usuarios updated successfully.');

        return redirect(route('usuarios.index'));
    }

    /**
     * Remove the specified Usuarios from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usuarios = $this->usuariosRepository->find($id);

        if (empty($usuarios)) {
            Flash::error('Usuarios not found');

            return redirect(route('usuarios.index'));
        }

        $this->usuariosRepository->delete($id);

        Flash::success('Eliminado Correctamente');

        return redirect(route('usuarios.index'));
    }
}
