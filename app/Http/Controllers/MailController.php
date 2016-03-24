<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
//use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Laracasts\Flash\Flash;

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
        mail::send('correos.enviado',$data, function($messages) use ($data){
            $messages->from(env('MAIL_USERNAME'), env('MAIL_NAME'));
            $messages->subject('Su pedido ha sido enviado...');
            $messages->to($data["correo"]);
        });

        ///dd('bien');
    }


    public static function graciaspago($data){
        /// ENVIA UN CORREO AL CLIENTE
        //dd($data);
        mail::send('correos.graciaspago',['datos'=> $data], function($messages) use ($data) {
            $messages->from(env('MAIL_USERNAME'), env('MAIL_NAME'));
            $messages->subject('Gracias por su pago...');
            $messages->to($data->correo);
        });

        ///////////////////////////////////////////
        /// INFORMA ADMINISTRADOR ACERCA DEL PAGO
        ///////////////////////////////////////////
        $cuerpo = 'Haz Recibido un Pago de '.$data->nombre.' -Banco: '.$data->banco->nombre.' Bs. '.$data->monto.'  -Producto: '.$data->inventario->descr;

        mail::raw($cuerpo,function($message)
        {
            $message->from(env('MAIL_USERNAME'), 'Sistema SyS_JM');
            $message->to(env('MAIL_USERNAME'))->subject('SyS_JM: Haz recibido un pago');
        });
       /// dd('sss');
    }

    public static function compra($data){
   //     dd($data);
        mail::send('correos.compra',$data, function($messages) use ($data) {
            $messages->from(env('MAIL_USERNAME'), env('MAIL_NAME'));
            $messages->subject(' 🏆 ¡Felicitaciones! Gracias por su Compra ...');
            $messages->to($data["correo"]);
        });
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
       // mail::send();
    }
}