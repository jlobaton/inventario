<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Inventario;
use Laracasts\Flash\Flash;
use App\Http\Requests\InventarioRequest;
use Illuminate\Routing\Route;

class InventarioController extends Controller
{
    private  $array_video = array(
                        '4' => '4',
                        '8' => '8',
                        '16' => '16',
                        '24' => '24',
                        '32' => '32');

    public function __construct()
    {
        $this->middleware('auth');
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }

    public function find(Route $route){
        $this->datos = Inventario::find($route->getParameter('inventario'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$datos = \DB::table('inventario')->OrderBy('id','DESC')->paginate(5);
        $datos = Inventario::Search($request->buscar)->OrderBy('id','ASC')->paginate(10);

        return view('inventario.index')->with('datos',$datos)
                                        ->with('buscar',$request->buscar);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventario.create', ['array_video' => $this->array_video]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InventarioRequest $request)
    {
        $datos = new Inventario($request->all());
        $datos->save();
        Flash::success("Se ha registrado ".$datos->descr. " de forma exitosa!");
        return redirect()->route('inventario.index');
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
        return view('inventario.edit', ['datos' => $this->datos, 'array_video' => $this->array_video]);
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

        Flash::warning("Se ha actualizado ".$this->datos->descr." de forma exitosa!");
        return redirect()->route('inventario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$conf = $this->datos->delete($id);
        $datos = Inventario::find($id);
        $datos->delete();

        Flash::error("Se ha eliminado de forma exitosa!");
        return redirect()->route('inventario.index');
    }

    public function eliminada(Request $request)
    {
        $datos = Inventario::onlyTrashed($request
                                            ->buscar)->OrderBy('id','ASC')
                                                     ->paginate(5);

        return view('inventario.eliminada')->with('datos',$datos)
                                           ->with('buscar',$request->buscar);
    }

    public function restaurar(Request $request)
    {
        $datos = Inventario::onlyTrashed($request->id)->restore();
        $datos = Inventario::onlyTrashed($request->buscar)->OrderBy('id','ASC')->paginate(5);
        Flash::success("Se ha Resturado de forma exitosa!");
        return view('inventario.index')->with('datos',$datos)
                                       ->with('buscar',$request->buscar);
    }

}
