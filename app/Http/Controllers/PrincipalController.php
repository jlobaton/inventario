<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Inventario;
use App\Ordenes;
use Laracasts\Flash\Flash;
use Illuminate\Routing\Route;
use Carbon\Carbon;

class PrincipalController extends Controller
{
    function __construct(){
        Carbon::setLocale('es');
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $UltReg    = (Inventario::UltimoRegistrado());
        $count_inv = Inventario::count();
        $count_ord = Ordenes::count();
        $count_ord_env = Ordenes::getEnviado()->count();
        $datos     = Ordenes::latest('id')->take(1)->get();

        return view('layouts.principal', ['count_inv'     => $count_inv,
                                          'count_ord'     => $count_ord,
                                          'count_ord_env' => $count_ord_env,
                                          'UltReg'        => $UltReg,
                                          'datos'        => $datos
                                          ]
                    );
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }
}
