<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProveedoresClientesRequest;
use App\Http\Requests\UpdateProveedoresClientesRequest;
use App\Repositories\ProveedoresClientesRepository;
use App\Http\Controllers\AppBaseController;

use App\Models\Usuarios;

use Illuminate\Http\Request;
use Flash;
use Response;   
use App\User;

use Auth;

class ProveedoresClientesController extends AppBaseController
{
    /** @var  ProveedoresClientesRepository */
    private $proveedoresClientesRepository;

    public function __construct(ProveedoresClientesRepository $proveedoresClientesRepo)
    {
        $this->proveedoresClientesRepository = $proveedoresClientesRepo;
    }

    /**
     * Display a listing of the ProveedoresClientes.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $proveedoresClientes = $this->proveedoresClientesRepository->all();

        return view('proveedores_clientes.index')
            ->with('proveedoresClientes', $proveedoresClientes);
    }

    /**
     * Show the form for creating a new ProveedoresClientes.
     *
     * @return Response
     */
    public function create()
    {

        $nomina=User::pluck('nombre','id_nomi');
        return view('proveedores_clientes.create')
        ->with('nomina',$nomina)
        ;
    }

    /**
     * Store a newly created ProveedoresClientes in storage.
     *
     * @param CreateProveedoresClientesRequest $request
     *
     * @return Response
     */
    public function store(CreateProveedoresClientesRequest $request)
    {

        $input = $request->all();
        $input ['id_nomi']=Auth::user()->id_nomi;

        $proveedoresClientes = $this->proveedoresClientesRepository->create($input);

        Flash::success('Proveedores Clientes saved successfully.');

        return redirect(route('proveedoresClientes.index'));
    }

    /**
     * Display the specified ProveedoresClientes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $proveedoresClientes = $this->proveedoresClientesRepository->find($id);

        if (empty($proveedoresClientes)) {
            Flash::error('Proveedores Clientes not found');

            return redirect(route('proveedoresClientes.index'));
        }

        return view('proveedores_clientes.show')->with('proveedoresClientes', $proveedoresClientes);
    }

    /**
     * Show the form for editing the specified ProveedoresClientes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $proveedoresClientes = $this->proveedoresClientesRepository->find($id);

        if (empty($proveedoresClientes)) {
            Flash::error('Proveedores Clientes not found');

            return redirect(route('proveedoresClientes.index'));
        }

        return view('proveedores_clientes.edit')->with('proveedoresClientes', $proveedoresClientes);
    }

    /**
     * Update the specified ProveedoresClientes in storage.
     *
     * @param int $id
     * @param UpdateProveedoresClientesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProveedoresClientesRequest $request)
    {
        $proveedoresClientes = $this->proveedoresClientesRepository->find($id);

        if (empty($proveedoresClientes)) {
            Flash::error('Proveedores Clientes not found');

            return redirect(route('proveedoresClientes.index'));
        }

        $proveedoresClientes = $this->proveedoresClientesRepository->update($request->all(), $id);

        Flash::success('Proveedores Clientes updated successfully.');

        return redirect(route('proveedoresClientes.index'));
    }

    /**
     * Remove the specified ProveedoresClientes from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $proveedoresClientes = $this->proveedoresClientesRepository->find($id);

        if (empty($proveedoresClientes)) {
            Flash::error('Proveedores Clientes not found');

            return redirect(route('proveedoresClientes.index'));
        }

        $this->proveedoresClientesRepository->delete($id);

        Flash::success('Proveedores Clientes deleted successfully.');

        return redirect(route('proveedoresClientes.index'));
    }
}
