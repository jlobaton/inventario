<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
//use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller
{

    public static function send($data)
    {
        //dd($data);

/*
        Mail::raw('Text to e-mail', function ($messages) {
            $messages->from('jesuslobaton@gmail.com');
            //$messages->from(env('CONTACT_MAIL'), env('CONTACT_NAME'));
            $messages->subject('Su pedido ha sigo enviado...');
            $messages->to('jesuslobaton@gmail.com');
            //$messages->to($data->correo);

          //  dd($messages);
        });

        dd('bien');
*/
       // dd(env('MAIL_USERNAME'));
        mail::send('correos.enviado',$data, function($messages){
            $messages->from(env('MAIL_USERNAME'), env('MAIL_NAME'));
            $messages->subject('Su pedido ha sigo enviado...');
            $messages->to('jesuslobaton@gmail.com');
            //$messages->to($data->correo);
           // $messages->attachData($data, $name);

          //  dd($messages);
        });

        dd('bien');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $msj->subject('Su pedido ha sigo enviado...');
        $msj->to('jesuslobaton@gmail.com');
        dd($msj);
        mail::send();
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
