<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\BancoRequest;
use App\Http\Controllers\Controller;
use App\Banco;
use Laracasts\Flash\Flash;
use Illuminate\Routing\Route;

class BancoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['listado','store']]);
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }

    public function find(Route $route){
        $this->datos = Banco::find($route->getParameter('banco'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$datos = \DB::table('banco')->OrderBy('id','ASC')->paginate(5);
        $datos = Banco::Search($request->buscar)->OrderBy('id','ASC')->paginate(5);
        return view('banco.index')->with('datos', $datos)
                                  ->with('buscar',$request->buscar);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banco.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BancoRequest $request)
    {
        //dd($request->all());
        $datos = new Banco($request->all());
        $datos->save();
        Flash::success("Se ha registrado ".$datos->nombre. "de forma exitosa!");
        return redirect()->route('banco.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datos = Banco::onlyTrashed($request->buscar)->OrderBy('id','ASC')->paginate(5);
        return view('banco.index')->with('datos', $datos)
                                  ->with('buscar',$request->buscar);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$datos = \DB::table('banco')->find($id);
        return view('banco.edit', ['datos' => $this->datos]);
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
        //$datos = Banco::find($id);
        $this->datos->fill($request->all());
        $this->datos->save();

        Flash::warning("Se ha actualizado ".$this->datos->nombre." de forma exitosa!");
        return redirect()->route('banco.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$conf = \DB::table('banco')->delete($id);

        $datos = Banco::find($id);
        $datos->delete();
        Flash::error("Se ha eliminado de forma exitosa!");
        return redirect()->route('banco.index');
    }

    public function eliminada(Request $request)
    {
        $datos = Banco::onlyTrashed($request
                                            ->buscar)->OrderBy('id','ASC')
                                                     ->paginate(5);

        return view('banco.eliminada')->with('datos',$datos)
                                      ->with('buscar',$request->buscar);
    }

    public function restaurar(Request $request)
    {
        $datos = Banco::onlyTrashed($request->id)->restore();
        $datos = Banco::onlyTrashed($request->buscar)->OrderBy('id','ASC')->paginate(5);
        Flash::success("Se ha Resturado de forma exitosa!");
        return view('banco.index')->with('datos',$datos)
                                  ->with('buscar',$request->buscar);
    }

    public function listado(Request $request)
    {
        //$datos = \DB::table('banco')->OrderBy('nombre','ASC')->paginate(5);
        $datos = Banco::Search($request->buscar)->OrderBy('nombre','ASC')->get();
        return view('banco.listado')->with('datos', $datos)
                                  ->with('buscar',$request->buscar);
    }

}
