<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFacturasRequest;
use App\Http\Requests\UpdateFacturasRequest;
use App\Repositories\FacturasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

use App\Models\Empresas;
use App\Models\ProveedoresClientes;
use App\User;
use App\Models\Productos;
use App\Models\FacturasDetalles;

use Auth;
use DB;

class FacturasController extends AppBaseController
{
    /** @var  FacturasRepository */
    private $facturasRepository;

    public function __construct(FacturasRepository $facturasRepo)
    {
        $this->facturasRepository = $facturasRepo;
    }

    /**
     * Display a listing of the Facturas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //$facturas = $this->facturasRepository->all();
        $facturas = DB::select("SELECT f.id_fac,
                                    f.descuento,
                                    f.iva,
                                    SUM(fd.cantidad*fd.precio_unitario) as subt,
                                    em.sitio_web,
                                    nom.nombre,
                                    nom.apellidos,
                                    procli.razon_social,
                                    f.numfac
                                    FROM factura f
                                    JOIN factura_detalle fd ON f.id_fac=fd.id_fac
                                    JOIN empresa em ON f.id_empr=em.id_empr
                                    JOIN nomina nom ON f.id_nomi=nom.id_nomi
                                    JOIN proveedores_clientes procli ON f.id_procli=procli.id_procli
                                    GROUP BY f.id_fac 
                                ");

        return view('facturas.index')
            ->with('facturas', $facturas);
    }

    /**
     * Show the form for creating a new Facturas.
     *
     * @return Response
     */
    public function create()
    {   
  
        $empresas = Empresas::pluck("razon_social","id_empr");
        $clientes = ProveedoresClientes::pluck("razon_social","id_procli");
        $auxfac = DB::select("SELECT * FROM factura ORDER BY numfac DESC LIMIT 1");
        $producto = Productos::pluck("nombre_descripcion","id_prod");

        if(empty($auxfac)){
            //$numfac = '001-001-000000001';
            $numfac=1;
        }else{
            $numfac=($auxfac[0]->numfac)+1;
        }

        return view('facturas.create')
        ->with('empresas',$empresas)
        ->with('clientes',$clientes)    
        ->with('numfac',$numfac)
        ->with('producto',$producto)
        ;
    }

    /**
     * Store a newly created Facturas in storage.
     *
     * @param CreateFacturasRequest $request
     *
     * @return Response
     */
    public function store(CreateFacturasRequest $request)
    {
        $input = $request->all(); 
        $input ['id_nomi']=Auth::user()->id_nomi;
        $input ['fecha']=date('Y-m-d');
        $facturas = $this->facturasRepository->create($input);

        $Detalle = new FacturasDetalles;

        $Detalle ->id_fac=$facturas->id_fac; 
        $Detalle ->id_prod=$input['descripcion'];
        $Detalle ->cantidad=$input['cantidad'];
        $Detalle ->descripcion=$input['descripcion'] ;
        $Detalle ->precio_unitario=$input['precio_unitario'] ;
        $Detalle ->destino=$input['destino'] ;

        $Detalle->save();


        Flash::success('Facturas saved successfully.');

        return redirect(route('facturas.edit',$facturas->id_fac));
    }

    /**
     * Display the specified Facturas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
    
        
        $facturas = DB::select("SELECT f.id_fac,
                                f.descuento,
                                f.iva,
                                SUM(fd.cantidad*fd.precio_unitario) as subt,
                                em.sitio_web,
                                em.direccion,
                                em.telefono_movil,
                                em.telefono_convencional,
                                em.correoo,
                                em.ruc,
                                nom.nombre,
                                nom.apellidos,
                                procli.razon_social,
                                procli.telefono_movil,
                                procli.correo,
                                f.numfac,
                                f.fecha
                                FROM factura f
                                JOIN factura_detalle fd ON f.id_fac=fd.id_fac
                                JOIN empresa em ON f.id_empr=em.id_empr
                                JOIN nomina nom ON f.id_nomi=nom.id_nomi
                                JOIN proveedores_clientes procli ON f.id_procli=procli.id_procli
                                WHERE f.id_fac=$id
                                GROUP BY f.id_fac");

        $detalle=DB::select("SELECT * FROM factura_detalle fd 
                                JOIN producto p ON fd.id_prod=p.id_prod 
                                WHERE fd.id_fac=$id 
                                "); 

        $pdf = app('dompdf.wrapper');
        $pdf -> loadView ('facturas.show',['facturas'=>$facturas[0],'detalle'=>$detalle  ]);
        return $pdf->stream();
        //return view('facturas.show')->with('facturas', $facturas[0]);

    }

    /**
     * Show the form for editing the specified Facturas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $facturas = $this->facturasRepository->find($id);

        $empresas = Empresas::pluck("razon_social","id_empr");
        $clientes = ProveedoresClientes::pluck("razon_social","id_procli");
        $numfac = $facturas->numfac;
        $producto = Productos::pluck("nombre_descripcion","id_prod");
        $facturasDetalles = DB::select("SELECT * FROM factura_detalle fd
                                        JOIN producto p ON fd.id_prod=p.id_prod        
                                        WHERE fd.id_fac=$id");
                                    

        //$facturasDetalles = FacturasDetalles::where(['id_fac',$id]);

        return view('facturas.edit')
        ->with('facturas', $facturas)
        ->with('empresas', $empresas)
        ->with('clientes', $clientes)
        ->with('numfac',$numfac)
        ->with('producto',$producto)
        ->with('facturasDetalles',$facturasDetalles)
        ;
    }

    /**
     * Update the specified Facturas in storage.
     *
     * @param int $id
     * @param UpdateFacturasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFacturasRequest $request)
    {
        $input = $request->all();
        $auxfacturas = $this->facturasRepository->find($id); 

        if( isset($input['iva']) ){
            $input['iva']=1;
        }else{
            $input['iva']=0;
        }

        $facturas = $this->facturasRepository->update($input, $id);
        if($input['cantidad']!=null && $input['precio_unitario']!=null){
            
            $Detalle = new FacturasDetalles;
            $Detalle ->id_fac=$id; 
            $Detalle ->id_prod=$input['descripcion'];
            $Detalle ->cantidad=$input['cantidad'];
            $Detalle ->descripcion=$input['descripcion'] ;
            $Detalle ->precio_unitario=$input['precio_unitario'] ;
            $Detalle ->destino=$input['destino'] ;
            $Detalle->save();
            return redirect(route('facturas.edit',$id));
            }  
        
        return redirect(route('facturas.index',$id));

        }

  

    /**
     * Remove the specified Facturas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $facturas = $this->facturasRepository->find($id);

        if (empty($facturas)) {
            Flash::error('Facturas not found');

            return redirect(route('facturas.index'));
        }

        $this->facturasRepository->delete($id);

        Flash::success('Eliminado Correctamente');

        return redirect(route('facturas.index'));
    }
}
