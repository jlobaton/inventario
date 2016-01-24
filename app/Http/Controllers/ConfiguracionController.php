<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Configuracion;
use Laracasts\Flash\Flash;
use App\Http\Requests\ConfiguracionRequest;
use Illuminate\Routing\Route;

class ConfiguracionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }

    public function find(Route $route){
        $this->conf = Configuracion::find($route->getParameter('configuracion'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Respon
     */
    public function index(Request $request)
    {
        //return 'listado la configuracion de la base de datos';

        $conf = \DB::table('configuracion')->orderBy('id','ASC')->paginate(5);
        //->get()
        return view('configuracion.index')->with('datos', $conf)
                                          ->with('buscar',$request->buscar);
    }

    public function getVista1(){
        return view('configuracion')->with('nombre','jesus');
    }
    /**
     * Show the form for creating a new resource.
     *        $datos = \DB::table('configuracion')->find(1);

     * @return Response
     */
    public function create()
    {
        return view('configuracion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(ConfiguracionRequest $request)
    {

        //dd($request->all());
        $configuracion = new Configuracion($request->all());
        //$user->password = bcrypt($request->password);
        $configuracion->save();
        Flash::success("Se ha registrado ".$configuracion->Titulo. "de forma exitosa!");
        return redirect()->route('configuracion.index');
        //dd('Datos Guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id()
     * @return Response
     */
    public function show($id)
    {
        return view('configuracion',['datos' => $this->conf]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //$conf = configuracion->find($id)->get();
        return view('configuracion.edit',['datos' => $this->conf]);
        //return view('configuracion.edit', array('datos' => $conf));
        //return view('configuracion.edit')->with('datos',$conf);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->conf->fill($request->all());
        /*
        $conf->estatus = $request->estatus;
        $conf->titulo  = $request->titulo;
        $conf->mensaje = $request->mensaje;
        $conf->urlimg  = $request->urlimg;
        */
        $this->conf->save();

        Flash::warning("Se ha actualizado ".$this->conf->titulo." de forma exitosa!");
        return redirect()->route('configuracion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //$conf = Configuracion::find($id);
        $conf = $this->conf->delete($id);
        Flash::error("Se ha eliminado de forma exitosa!");
        return redirect()->route('configuracion.index');
    }
}