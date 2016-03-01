<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Inv_imag;
use App\Inventario;
use Laracasts\Flash\Flash;
use Illuminate\Routing\Route;

class ImagenesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->beforeFilter('@find',['only' => ['edit','update','create']]);
    }

    public function find(Route $route){
        dd($route->getParameter('imagenes'));
        $this->datos = Inv_imag::find($route->getParameter('imagenes'));
        //return $this->datos;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $imagenes = Inv_imag::OrderBy('id')->get();
        //dd($imagenes[0]->urlimagen);
        return view('imagenes.ver',['imagenes' => $imagenes,
                                      'buscar'   => $request->buscar]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $array_inventario     = Inventario::orderBy('descr', 'asc')->lists('descr','id');
        return view('imagenes.create', ['array_inventario' => $array_inventario]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = new Inv_imag($request->all());
        $datos->save();
        Flash::success("Se ha registrado ".$datos->codpro. "de forma exitosa!");
        return redirect()->route('imagenes.index');
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
        return view('imagenes.edit', ['datos' => $this->datos]);
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
     //dd('aaaa');
        //$conf = $this->datos->delete();
        $datos = Inv_imag::find($id);
        $datos->delete();
        Flash::error("Se ha eliminado de forma exitosa!");
        return redirect()->route('imagenes.index');
    }
}
