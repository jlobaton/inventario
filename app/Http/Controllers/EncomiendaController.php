<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Encomienda;
use Laracasts\Flash\Flash;
use Illuminate\Routing\Route;

class EncomiendaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->beforeFilter('@find',['only' => ['edit','update']]);
    }

    public function find(Route $route){
        $this->datos = Encomienda::find($route->getParameter('encomienda'));
        return $this->datos;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$datos = \DB::table('encomienda')->OrderBy('id','ASC')->paginate(5);
        $datos = Encomienda::Search($request->buscar)->OrderBy('id','ASC')->paginate(5);
        return view('encomienda.index')->with('datos',$datos)
                                       ->with('buscar',$request->buscar);

    }

    public function restaurar(Request $request)
    {
        $datos = Encomienda::onlyTrashed($request->id)->restore();
        $datos = Encomienda::onlyTrashed($request->buscar)->OrderBy('id','ASC')->paginate(5);
        Flash::success("Se ha Resturado de forma exitosa!");
        return view('encomienda.index')->with('datos',$datos)
                                       ->with('buscar',$request->buscar);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('encomienda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $datos = new Encomienda($request->all());
        $datos->save();
        Flash::success("Se ha registrado ".$datos->nombre. "de forma exitosa!");
        return redirect()->route('encomienda.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //dd('WWWWWW');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('encomienda.edit', ['datos' => $this->datos]);
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
        $this->datos->fill($request->all());
        $this->datos->save();

        Flash::warning("Se ha actualizado ".$this->datos->nombre." de forma exitosa!");
        return redirect()->route('encomienda.index');
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
        $datos = Encomienda::find($id);
        $datos->delete();
        Flash::error("Se ha eliminado de forma exitosa!");
        return redirect()->route('encomienda.index');
    }

    public function eliminada(Request $request)
    {
        $datos = Encomienda::onlyTrashed($request
                                            ->buscar)->OrderBy('id','ASC')
                                                     ->paginate(5);

        return view('encomienda.eliminada')->with('datos',$datos)
                                           ->with('buscar',$request->buscar);
    }

}
