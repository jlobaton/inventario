<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\InventarioRequest;
use App\Http\Controllers\Controller;
use App\Inventario;
use Laracasts\Flash\Flash;
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
        $this->beforeFilter('@find',['only' => ['edit','update','destroy','cambiaroferta','cambiarestatus']]);
    }

    public function find(Route $route){

        if ($route->getParameter('inventario')) $codigo = $route->getParameter('inventario');
        else $codigo = $route->getParameter('id');

        $this->datos = Inventario::find($codigo);
        $this->notFound($this->datos);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd($request->page);
        $sort = ($request->sort)? $request->sort : 'id';
        $datos = Inventario::Search($request->buscar)->OrderBy($sort,'ASC')->paginate(10);

//DESEO ENVIARLE LA VARIABLE page http://inventario.yo/inventario?page=2
        return view('inventario.index')->with('datos',$datos)
                                       ->with('request',$request)
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
        $datos->estatus = false;
        $datos->save();
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
    //    Inventario::ActivarProducto($request->id);
        $datos = Inventario::onlyTrashed($request->buscar)->OrderBy('id','ASC')->paginate(5);
        Flash::success("Se ha Resturado de forma exitosa!");
        return view('inventario.eliminada')->with('datos',$datos)
                                       ->with('buscar',$request->buscar);
    }

    public function cambiaroferta($id, $page)
    {
        $datos = Inventario::find($id);
        if (($datos->oferta) == true)
            $datos->oferta = false;
        else
            $datos->oferta = true;

        $datos->save();

        Flash::warning("Se ha actualizado ".$datos->descr." de forma exitosa!");
        return redirect()->route('inventario.index',['page'=>$page]);
    }

    public function cambiarestatus($id, $page)
    {
        //dd($page);
        $datos = Inventario::find($id);
        if (($datos->estatus) == true)
            $datos->estatus = false;
        else
            $datos->estatus = true;

        $datos->save();

        Flash::warning("Se ha actualizado ".$datos->descr." de forma exitosa!");
        return redirect()->route('inventario.index',['page'=>$page]);
    }

}
