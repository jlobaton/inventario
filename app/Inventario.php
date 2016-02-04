<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventario extends Model
{
    use SoftDeletes;

    protected $table = 'inventario';

    protected $fillable = ['codpro','descr', 'video','audio','resolucion','almacenamiento','grabacion','general','exist','oferta','precio','estatus','created_at','update_at'];

    protected $dates = ['delete_at'];

    public function scopeSearch($query, $buscar){
    	return $query->where('descr','LIKE', "%$buscar%");
    }

    public static function UltimoRegistrado(){
        return Inventario::max('created_at');
    }

    public static function ActivarProducto($id){

        $datos = Inventario::find($id);
        //dd($datos);
        $datos->estatus = true;
        $datos->save();
    }

    public function inv_imag()
    {
    	return $this->hasOne('App\Inv_imag');
    }

    public function ordenes()
    {
    	return $this->hasOne('App\Ordenes');
    }

}
