<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFacturasDetallesRequest;
use App\Http\Requests\UpdateFacturasDetallesRequest;
use App\Repositories\FacturasDetallesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FacturasDetallesController extends AppBaseController
{
    /** @var  FacturasDetallesRepository */
    private $facturasDetallesRepository;

    public function __construct(FacturasDetallesRepository $facturasDetallesRepo)
    {
        $this->facturasDetallesRepository = $facturasDetallesRepo;
    }

    /**
     * Display a listing of the FacturasDetalles.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $facturasDetalles = $this->facturasDetallesRepository->all();

        return view('facturas_detalles.index')
            ->with('facturasDetalles', $facturasDetalles);
    }

    /**
     * Show the form for creating a new FacturasDetalles.
     *
     * @return Response
     */
    public function create()
    {
        return view('facturas_detalles.create');
    }

    /**
     * Store a newly created FacturasDetalles in storage.
     *
     * @param CreateFacturasDetallesRequest $request
     *
     * @return Response
     */
    public function store(CreateFacturasDetallesRequest $request)
    {
        $input = $request->all();

        $facturasDetalles = $this->facturasDetallesRepository->create($input);

        Flash::success('Facturas Detalles saved successfully.');

        return redirect(route('facturasDetalles.index'));
    }

    /**
     * Display the specified FacturasDetalles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        return $this->destroy($id);


    }

    /**
     * Show the form for editing the specified FacturasDetalles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $facturasDetalles = $this->facturasDetallesRepository->find($id);

        if (empty($facturasDetalles)) {
            Flash::error('Facturas Detalles not found');

            return redirect(route('facturasDetalles.index'));
        }

        return view('facturas_detalles.edit')->with('facturasDetalles', $facturasDetalles);
    }

    /**
     * Update the specified FacturasDetalles in storage.
     *
     * @param int $id
     * @param UpdateFacturasDetallesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFacturasDetallesRequest $request)
    {
        $facturasDetalles = $this->facturasDetallesRepository->find($id);

        if (empty($facturasDetalles)) {
            Flash::error('Facturas Detalles not found');

            return redirect(route('facturasDetalles.index'));
        }

        $facturasDetalles = $this->facturasDetallesRepository->update($request->all(), $id);

        Flash::success('Facturas Detalles updated successfully.');

        return redirect(route('facturasDetalles.index'));
    }

    /**
     * Remove the specified FacturasDetalles from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $facturasDetalles = $this->facturasDetallesRepository->find($id);        
 

        $this->facturasDetallesRepository->delete($id);     

        return redirect(route('facturas.edit',$facturasDetalles->id_fac));
    }
}
