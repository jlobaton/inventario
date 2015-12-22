<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\MigracionRequest;
use App\Migracion;
use Laracasts\Flash\Flash;
use App\Inventario;
use App\Inv_imag;

class MigracionController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        \Mail::send('migracion.index', array('kkk'), function($message) {
    $message->to('jesuslobaton@gmail.com', 'Codelution Staff')->subject('Laravel 4 GMail App!');
});*/
           return view('migracion.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function verfoto(Request $request)
    {

         $public_path = public_path();
         //$url = $public_path.'/storage/'.$request->archivo;
         $url = \Storage::disk('local').$request->archivo;
         //verificamos si el archivo existe y lo retornamos
         if (Storage::exists($archivo))
         {
           return response()->download($url);
         }
         //si no se encuentra lanzamos un error 404.
         abort(404);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MigracionRequest $request)
    {
        //Guardamos el archivo
        if ($request->file('archivo'))
        {
            //$file = $request->file('archivo');
            //dd($file->name);exit();
            //$path_file = self::saveArchivo($file);
            $cant = self::ImportarArchivo($request);

            Flash::success("Se ha migrado de forma exitosa ".$cant." Registros");
        }else{
            Flash::error("Debe seleccionar un archivo de Tipo Excel o CSV");
        }
        return redirect()->route('migracion.index');
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

    public function ImportarArchivo($request)
    {
        //$file = $request->file('archivo');
        //$file = "inventario.xls";
        $file = $request->file('archivo')->getClientOriginalName();
        $path_file = storage_path().'/app/'.$file;
        //dd($path_file);
        //$path_file = \Storage::disk('local').'/inventario.xls';

        //Verificamos si se va a borrar los datos de la tabla de INVENTARIO
        if ($request->borrar) \DB::table('inventario')->truncate();

        $i = 0;
        \Excel::load($path_file, function($reader) {
           // dd($reader->sheetsSelected());
            foreach ($reader->get() as $prod) {
         //       $i= $i+1;
                Inventario::create([
                    'codpro'    => $prod->codpro,
                    'descr'     => $prod->descr,
                    'descr2'    => $prod->descr2,
                    'video'     => $prod->video,
                    'audio'     => $prod->audio,
                    'resolucion'=> $prod->resolucion,
                    'almacenamiento' => $prod->almacenamiento,
                    'grabacion' => $prod->grabacion,
                    'general'   => $prod->general,
                    'exist'     => $prod->exist,
                    'oferta'    => $prod->oferta,
                    'precio'    => $prod->precio
                ]);
            //$i++;
            }
        });
        return $i;
    }


    public function show()
    {
        return view('migracion.imagenes');
    }

    public function saveimagenes(Request $request)
    {
        //Guardamos el archivo
        if ($request->file('archivo'))
        {
            $path_file = self::saveArchivo($request->file('archivo'));
            $cant = self::ImportarImagenes($request);

            Flash::success("Se ha migrado de forma exitosa ".$cant." Registros");
        }else{
            Flash::error("Debe seleccionar un archivo de Tipo Excel o CSV");
        }
        return redirect()->route('migracion.imagenes');
    }

    public function ImportarImagenes($request)
    {
        $file = $request->file('archivo')->getClientOriginalName();
        $path_file = storage_path().'/app/'.$file;
        //$path_file = \Storage::disk('local').'/inventario.xls';

        //Verificamos si se va a borrar los datos de la tabla de INVENTARIO
        if ($request->borrar) \DB::table('inv_imag')->truncate();

        //$i = 0;
        \Excel::load($path_file, function($reader) {
           // dd($reader->sheetsSelected());
            foreach ($reader->get() as $imag) {
                $inv = Inventario::where('codpro',$imag->codpro)->first();
                Inv_imag::create([
                    'inventario_id' => (($inv["id"]) ? $inv["id"] : 1),
                    'codpro'        => $imag->codpro,
                    'urlimagen'     => $imag->urlimagen
                ]);
            //$i++;
            }
        });

        $i = Inventario::count();
        return $i;
    }
}