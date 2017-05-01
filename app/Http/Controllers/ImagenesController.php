<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use Illuminate\Routing\Route;
use App\Inv_imag;
use App\Inventario;
use Yajra\Datatables\Facades\Datatables;

class ImagenesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->beforeFilter('@find',['only' => ['edit','update','create']]);

        $this->array_inventario = Inventario::BusquedaBase()->orderBy('descr', 'asc')->lists('descr','id');

    }

    public function find(Route $route){
        //dd($route->getParameter('imagenes'));
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
        //$imagenes = Inv_imag::OrderBy('id')->paginate(20);
       // $imagenes = Datatables::eloquent(Inv_imag::query())->make(true);
        //dd($imagenes);
        //dd($imagenes[0]->urlimagen);
        return view('imagenes.index',['buscar' => $request->buscar]);//('datos'  => $imagenes,);
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
//        ->editColumn('inventario_id', '{{$id}}')

//        $imagenes = Inv_imag::OrderBy('id')->get();

$imagenes = Inv_imag::join('inventario', 'inv_imag.inventario_id', '=', 'inventario.id')
->select(['inventario.descr', 'inv_imag.id','inv_imag.urlimagen', 'inv_imag.codpro']);

//dd($imagenes);
/*
$posts = Post::join('users', 'posts.user_id', '=', 'users.id')
            ->select(['posts.id', 'posts.title', 'users.name', 'users.email', 'posts.created_at', 'posts.updated_at']);
*/        //$imagenes = Datatables::eloquent(Inv_imag::query())
        $data = Datatables::of($imagenes)
        ->addColumn('accion', '<a class="fa fa-truck" data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route(\'imagenes.edit\',$id)  }}"><i class="fa fa-truck"></i></a>')


        ->make(true);
        return $data;

        //return Datatables::of(User::query())->make(true);
    }


    public function galeria(Request $request)
    {
        //dd('ddd');
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
        //$array_inventario     = Inventario::orderBy('descr', 'asc')->lists('descr','id');
        return view('imagenes.create', ['array_inventario' => $this->array_inventario]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('urlimagen'))
        {
       //obtenemos el nombre del archivo
        $nombre = $request->file('urlimagen')->getClientOriginalName();
       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('imagenes_app')->put($nombre,  \File::get($request->file('urlimagen')));
       $path_imagen = 'http://www.seguridadsistema.com.ve/app/imagenes/'.$nombre;

        $datos = new Inv_imag($request->all());
        $d = Inventario::BuscarProducto($datos->inventario_id);
        $datos->codpro = $d->codpro;
        $datos->urlimagen = $path_imagen;
        $datos->save();
        Flash::success("Se ha registrado ".$datos->codpro. "de forma exitosa!");
        return redirect()->route('imagenes.index');

        }else{
            //Flash::error("Debe seleccionar un archivo de Tipo Excel o CSV");
        }
    }

    public function saveArchivo($file)
    {
       //obtenemos el campo file definido en el formulario
       //$file = $request->file('archivo');

       //obtenemos el nombre del archivo
       $nombre = $file->getClientOriginalName();

       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('local')->put($nombre,  \File::get($file));
        //$url = $public_path.'/public/imagenes/'.$request->archivo;
       //return "archivo guardado";
       // dd("dddd");
       //dd(\Storage::disk('local'));
        return \Storage::disk('local');
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
        return view('imagenes.edit', ['datos' => $this->datos,
            'array_inventario' => $this->array_inventario]);
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
