<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{

    protected $table = 'ciudad';

    protected $fillable = ['estado_id','desc','capital'];


    public function scopeSearch($query, $buscar){
    	return $query->where('desc','LIKE', "%$buscar%");
    }

    public function ordenes()
    {
    	return $this->hasOne('App\Ordenes');
    }
}
