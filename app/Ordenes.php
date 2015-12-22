<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ordenes extends Model
{
	use SoftDeletes;

    protected $table = 'ordenes';

    protected $fillable = ['nombre','apellido', 'seudonimo', 'correo', 'cantidad', 'inventario_id','tipopago_id','bancorigen','banco_id','fecha','monto','obser','envnombre','envcedula','envtele','encomienda_id','envi_direc','estado_id','ciudad_id','enviobser','estatus'];

    protected $dates = ['delete_at'];

    public function scopeSearch($query, $buscar){
    	return $query->where('nombre','LIKE', "%$buscar%");
    }

    public static function Enviado()
    {
        $datos = Ordenes::where('estatus','=','Enviado')->OrderBy('id','ASC');
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

    public function ciudades()
    {
        return $this->belongsTo('App\Ciudades');
    }
/*
    public function estados()
    {
        return $this->belongsTo('App\Estados');
    }
*/
}
