<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{

    protected $table = 'ciudades';

    protected $fillable = ['estado_id','ciudad','capital'];


    public function scopeSearch($query, $buscar){
    	return $query->where('ciudad','LIKE', "%$buscar%");
    }

    public function ordenes()
    {
    	return $this->hasOne('App\Ordenes');
    }
}
