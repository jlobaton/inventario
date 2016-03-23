<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
Use Carbon\Carbon;

class Ordenes extends Model
{
	use SoftDeletes;

    protected $table = 'ordenes';

    protected $fillable = ['nombre','apellido', 'seudonimo', 'correo', 'cantidad', 'inventario_id','tipopago_id','bancorigen','banco_id','fecha','monto','obser','envnombre','envcedula','envtele','encomienda_id','envdirec','estado_id','ciudad_id','enviobser','seguro','estatus','suscribir'];

    protected $dates = ['delete_at', 'fecha'];

    public function scopeSearch($query, $buscar){
    	return $query->where('nombre','LIKE', "%$buscar%");
    }

    public static function prettyDate($fecha){
        $this->attributes['fecha'] = Carbon::createFromDate('d-m-Y', $fecha);
    }

    public static function getEnviado()
    {
        $datos = Ordenes::where('estatus','=','Enviado')->OrderBy('id','ASC');
//        dd($datos);

        return $datos;
    }

    public static function getPorenviar()
    {
        $datos = Ordenes::where('estatus','=','Por Enviar')->OrderBy('id','ASC');
        return $datos;
    }

	public function inventario()
	{
		return $this->belongsTo('App\Inventario');
	}

    public function banco()
    {
        return $this->belongsTo('App\Banco');
    }

    public function encomienda()
    {
        return $this->belongsTo('App\Encomienda');
    }

    public function ciudad()
    {
        return $this->belongsTo('App\Ciudad');
    }

    public function estado()
    {
        return $this->belongsTo('App\Estado');
    }

    public function enviado()
    {
        return $this->hasOne('App\Enviado');
    }

}
