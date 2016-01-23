<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function sesion(Request $request)
    {
        $input = $request->all();
        $usuario = $input["username"];
        $password = $input["password"];
        echo $usuario." ".$password;
        exit('ddd');
        //return \View::make('formulario');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    public function logout()
    {
        Auth::logout();
        Flash::success('Sesión Cerrada, hasta luego...');
        return redirect('login');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(LoginRequest $request)
    {
        $input = $request->all();
//echo bcrypt($request->input('password')); exit();

        if (Auth::attempt(['name' => $request->input('username'), 'password' => $request->input('password')])) {
            return redirect()->to('/');
        }
        Flash::error("Los datos no son validos");
        return redirect()->route('login.index');
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
