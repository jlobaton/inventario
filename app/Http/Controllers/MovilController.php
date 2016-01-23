<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Ordenes;
use App\Inventario;
use App\Estado;
use App\Ciudad;
use App\Banco;
use App\Tipopago;
use App\Encomienda;
use App\Enviado;
use Laracasts\Flash\Flash;
//use App\Http\Requests\OrdeneRequest;
use Illuminate\Routing\Route;
use Carbon\Carbon;

class MovilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $array_ciudad     = Ciudad::orderBy('desc', 'asc')->lists('desc','id');
        $array_estado     = Estado::orderBy('desc', 'asc')->lists('desc','id');
        $array_encomienda = Encomienda::orderBy('nombre', 'asc')->lists('nombre','id');
        $array_banco      = Banco::orderBy('nombre', 'asc')->lists('nombre','id');
        $array_tp         = Tipopago::orderBy('nombre', 'asc')->lists('nombre','id');
        $array_inv        = Inventario::orderBy('descr', 'asc')->lists('descr','id');
        //dd($array_ciudad);

        return view('movil.prueba', [
                                    'array_ciudad' => $array_ciudad,
                                    'array_estado' => $array_estado,
                                    'array_encomienda' => $array_encomienda,
                                    'array_banco' => $array_banco,
                                    'array_tp'    => $array_tp,
                                    'array_inv'   => $array_inv
                                    ]);

        //return view('movil.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $array_ciudad     = Ciudad::orderBy('desc', 'asc')->lists('desc','id');
        $array_estado     = Estado::orderBy('desc', 'asc')->lists('desc','id');
        $array_encomienda = Encomienda::orderBy('nombre', 'asc')->lists('nombre','id');
        $array_banco      = Banco::orderBy('nombre', 'asc')->lists('nombre','id');
        $array_tp         = Tipopago::orderBy('nombre', 'asc')->lists('nombre','id');
        $array_inv        = Inventario::orderBy('descr', 'asc')->lists('descr','id');
        //dd($array_ciudad);

        return view('movil.index', [
                                    'array_ciudad' => $array_ciudad,
                                    'array_estado' => $array_estado,
                                    'array_encomienda' => $array_encomienda,
                                    'array_banco' => $array_banco,
                                    'array_tp'    => $array_tp,
                                    'array_inv'   => $array_inv
                                    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                //Log::info('Showing user profile for user: ');
        //echo "sss";
        dd($request->all());
/*        $datos = new Ordenes($request->all());
        $datos->save();

        Flash::success("Se ha registrado ".$datos->nombre. " de forma exitosa!");
        return redirect()->route('ordene.index');
*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
