<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    protected $table = 'configuracion';

    protected $fillable = ['id', 'estatus','titulo', 'mensaje', 'urlimg', 'update_at'];

        public function scopeSearch($query, $buscar){
    	return $query->where('estatus','LIKE', "%$buscar%");
    }
}
