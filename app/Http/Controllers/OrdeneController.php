<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Ordenes;
use App\Inventario;

use Laracasts\Flash\Flash;
use App\Http\Requests\OrdeneRequest;
use Illuminate\Routing\Route;
use Carbon\Carbon;

class OrdeneController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }

    public function find(Route $route){
        $this->datos = Ordenes::find($route->getParameter('ordene'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $UltReg = new Carbon(Inventario::UltimoRegistrado());
        $count_ord = Ordenes::count();
        $datos = Ordenes::Search($request->buscar)->where('estatus','=','Por enviar')->OrderBy('id','ASC')->paginate(5);

//dd(New Carbon($datos[0]->fecha));
        return view('ordene.index', ['datos'    => $datos,
                                    'UltReg'    => $UltReg,
                                    'count_ord' => $count_ord,
                                    'buscar'    => $request->buscar]
                    );
    }

    public function enviado(Request $request)
    {
        /*
        $datos = Ordenes::Search($request->buscar)->where('estatus','=','Enviado')->OrderBy('id','ASC')
                                                     ->paginate(5);

        return view('inventario.eliminada')->with('datos',$datos)
                                           ->with('buscar',$request->buscar);
                                           */
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ordene.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InventarioRequest $request)
    {
        $datos = new Ordenes($request->all());
        $datos->save();

        Flash::success("Se ha registrado ".$datos->nombre. " de forma exitosa!");
        return redirect()->route('ordene.index');
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
        //$this->datos->get()
        $ed=Ordenes::find(1)->get();
        dd($ed[0]->ciudades()->get());
        return view('ordene.edit', ['datos' => $this->datos]);
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
        return redirect()->route('ordene.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $conf = $this->datos->delete($id);
        Flash::error("Se ha eliminado de forma exitosa!");
        return redirect()->route('ordene.index');
    }
}