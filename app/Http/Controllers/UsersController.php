<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Routing\Route;
use App\User;
use Laracasts\Flash\Flash;
use Carbon\Carbon;

//use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es');
        $this->middleware('auth');
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }

    public function find(Route $route){
        $this->datos = User::find($route->getParameter('usuarios'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datos = User::Search($request->buscar)->OrderBy('id','ASC')->paginate(5);
        return view('usuarios.index', ['datos'  => $datos,
                                       'buscar' => $request->buscar]
                    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        $datos = new User($request->all());
        $datos->password = bcrypt($request->password);
        $datos->save();

        Flash::success("Se ha registrado el usuario".$datos->name. " de forma exitosa!");
        return redirect()->route('usuarios.index');
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
        return view('usuarios.edit', ['datos' => $this->datos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {

        $this->datos->fill($request->all());
        $this->datos->password = bcrypt($request->password);
        $this->datos->save();

        Flash::warning("Se ha actualizado el usuario ".$this->datos->name." de forma exitosa!");
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$conf = \DB::table('User')->delete($id);

        $datos = User::find($id);
        $datos->delete();
        Flash::error("Se ha eliminado de forma exitosa!");
        return redirect()->route('usuarios.index');
    }

    public function eliminada(Request $request)
    {
        $datos = User::onlyTrashed($request
                                            ->buscar)->OrderBy('id','ASC')
                                                     ->paginate(5);

        return view('usuarios.eliminada')->with('datos',$datos)
                                         ->with('buscar',$request->buscar);
    }

    public function restaurar(Request $request)
    {
        $datos = User::onlyTrashed($request->id)->restore();
        $datos = User::onlyTrashed($request->buscar)->OrderBy('id','ASC')->paginate(5);
        Flash::success("Se ha Resturado de forma exitosa!");
        return view('usuarios.index')->with('datos',$datos)
                                ->with('buscar',$request->buscar);
    }
}
