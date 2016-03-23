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
use App\Http\Requests\OrdeneRequest;
use App\Http\Requests\CompraRequest;
use Illuminate\Routing\Route;
use Carbon\Carbon;
use App\Http\Controllers\MailController;
use App\Http\Controllers\HerramientaController;

class OrdeneController extends Controller
{
    private $estatus_enviado  = 'Enviado';
    private $enviar_correo  = true;

    public function __construct()
    {
        Carbon::setLocale('es');
        $this->middleware('auth', ['except' => ['create','store']]);
        $this->beforeFilter('@find',['only' => ['edit','update','destroy', 'enviar','updatenviar', 'showpago']]);

        $this->array_ciudad     = Ciudad::orderBy('desc', 'asc')->lists('desc','id');
        $this->array_estado     = Estado::orderBy('desc', 'asc')->lists('desc','id');
        $this->array_encomienda = Encomienda::orderBy('nombre', 'asc')->lists('nombre','id');
        $this->array_banco      = Banco::orderBy('nombre', 'asc')->lists('nombre','id');
        $this->array_tp         = Tipopago::orderBy('nombre', 'asc')->lists('nombre','id');

    }

    public function find(Route $route){
        if ($route->getParameter('ordene')){
            $buscar = $route->getParameter('ordene');
        }else{
            $buscar = $route->getParameter('id');
        }

        $this->datos = Ordenes::find($buscar);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     //   $UltReg = Inventario::UltimoRegistrado();
     //   $count_ord = Ordenes::count();
        $datos = Ordenes::Search($request->buscar)->where('estatus','=','Por enviar')->OrderBy('id','ASC')->paginate(5);

/*
dd($datos[0]->fecha->format('d/m/Y'));
   $fecha =  new Carbon($datos[0]->fecha);
dd($fecha->format('d-m-Y'),$datos[0]->fecha->format('d/m/Y'));
*/
//dd(New Carbon($datos[0]->fecha));
        return view('ordene.index', ['datos'    => $datos,
                                    'buscar'    => $request->buscar]
                    );
    }

    public function enviado(Request $request)
    {
        $datos = Enviado::Search($request->buscar)->OrderBy('id','DESC')->paginate(5);

        return view('ordene.enviado', ['datos'=>$datos,
                                       'buscar'=>$request->buscar]
                                       );
    }

    public function enviar(Request $request)
    {
        $array_ciudad     = Ciudad::orderBy('desc', 'asc')->lists('desc','id');
        $array_estado     = Estado::orderBy('desc', 'asc')->lists('desc','id');
        $array_encomienda = Encomienda::orderBy('nombre', 'asc')->lists('nombre','id');

        return view('ordene.enviar', ['datos'          => $this->datos,
                                    'array_ciudad'     => $array_ciudad,
                                    'array_estado'     => $array_estado,
                                    'array_encomienda' => $array_encomienda
                                    ]);
    }

    public function updatenviar(Request $request)
    {

        if ($this->enviar_correo) MailController::send($request->all());
        //dd('pausa');
        $datos = Ordenes::find($request->id);
        $datos->encomienda_id = $request->encomienda_id;
        $datos->envdirec = $request->envdirec;
        $datos->estatus  = $this->estatus_enviado;
        $datos->envobser = $request->envobser;
        $datos->save();

        $datos = new Enviado();
        $datos->ordenes_id = $request->id;
        $datos->nroguia = $request->nroguia;
        $datos->fecha   = Carbon::createFromFormat('d-m-Y', $request->fecha);
        $datos->save();

        Flash::success("Se ha registrado ".$datos->nombre. " de forma exitosa!");
        return redirect()->route('ordene.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $array_inventario = Inventario::orderBy('descr', 'asc')->lists('descr','id');
        return view('ordene.create', ['datos'        => $array_inventario,
                                    'array_ciudad' => $this->array_ciudad,
                                    'array_estado' => $this->array_estado,
                                    'array_encomienda' => $this->array_encomienda,
                                    'array_banco' => $this->array_banco,
                                    'array_tp' => $this->array_tp
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
        $fecha = $request["fecha"];
        $request["fecha"] = Carbon::createFromFormat('d-m-Y', $fecha);
        $datos = new Ordenes($request->all());
        $datos->save();
        dd($datos);
        dd($datos->inventario->inv_imag->urlimagen);
        if ($this->enviar_correo) MailController::graciaspago($datos);

        //Flash::success("Se ha registrado la orden de ".$datos->nombre. " de forma exitosa!");
        Flash::success("Su Pago se ha registrado de forma exitosa!, Pronto le estaremos enviado su pedido. Gracias por su Pago...");
        return view('layouts.backend.blanco');
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
        //dd($this->datos->fecha->format('d-m-y'));
        $array_inventario = Inventario::orderBy('descr', 'asc')->lists('descr','id');
        return view('ordene.edit', ['datos'        => $this->datos,
                                    'array_inventario' => $array_inventario,
                                    'array_ciudad' => $this->array_ciudad,
                                    'array_estado' => $this->array_estado,
                                    'array_encomienda' => $this->array_encomienda,
                                    'array_banco' => $this->array_banco,
                                    'array_tp' => $this->array_tp
                                    ]);
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
        $fecha = $request["fecha"];

        $request["fecha"] = Carbon::createFromFormat('d-m-Y', $fecha);
        //$request["fecha"]= $request["fecha"]->format('Y-m-d');
        //dd($request->all());
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyenviado($id)
    {
        $datos = Enviado::find($id);
        $datos->delete();
        Flash::error("Se ha eliminado de forma exitosa!");
        return redirect()->route('ordene.enviado');
    }

    public function showpago($id)
    {
        //dd($this->datos->fecha->format('d-m-y'));
        $array_inventario = Inventario::orderBy('descr', 'asc')->lists('descr','id');
        return view('ordene.showpago', ['datos'        => $this->datos,
                                    'array_inventario' => $array_inventario,
                                    'array_ciudad' => $this->array_ciudad,
                                    'array_estado' => $this->array_estado,
                                    'array_encomienda' => $this->array_encomienda,
                                    'array_banco' => $this->array_banco,
                                    'array_tp' => $this->array_tp
                                    ]);
    }

///////////////////////////////////////
/////  ORDEN DE COMPRA
///////////////////////////////////////

     public function compra()
    {
        return view('ordene.compra');

    }

    //Formulario que envia un correo electronico para el pago
    public function store_compra(CompraRequest $request)
    {
//        dd($request->all());
        if ($this->enviar_correo) MailController::compra($request->all());

        //Flash::success("Se ha registrado la orden de ".$datos->nombre. " de forma exitosa!");
        Flash::success("Correo enviado Correctamente...");
        return view('ordene.compra');
    }
///////////////////////////////////////
/////  REPORTE PARA IMPRIMIR
///////////////////////////////////////
    public function imprimirorden($id)
    {
        //dd($id);
        //$datos = Ordenes::OrderBy('id')->get();
        $datos = Ordenes::find($id);
        return view('ordene.print', ['datos' => $datos, 'estatus' => 1]);
    }

    public function reporteporenviar(Request $request)
    {
        //$datos = Ordenes::OrderBy('id')->get();
        $datos = Ordenes::Search($request->buscar)->where('estatus','=','Por enviar')->OrderBy('id','ASC')->get();

        //dd($datos);
        return view('ordene.print', ['datos' => $datos, 'estatus' => 2]);
    }


}