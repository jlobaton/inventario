<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Ordenes;
use App\Inventario;
use Carbon\Carbon;

class AsideComposer{

	public function compose(View $view)
	{
        Carbon::setLocale('es');

        $UltReg = Inventario::UltimoRegistrado();
        $count_ord = Ordenes::count();
        $datos_pedido = Ordenes::orderBy('id', 'desc')->get();
        $datos_pedido = Ordenes::orderBy('id', 'desc')->get();
        $PorEnviar = Ordenes::getPorenviar()->get();
        $Enviado = Ordenes::getEnviado()->get();
//dd($PorEnviar[0]->fecha);
		$view->with(['UltReg'    => $UltReg,
                     'count_ord' => $count_ord,
                     'datos_pedido' => $datos_pedido,
                     'PorEnviar' => $PorEnviar,
                     'Enviado' => $Enviado
                   ]);
	}
}
