<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estado';

    protected $fillable = ['desc','is_3166-2'];


    public function scopeSearch($query, $buscar){
    	return $query->where('desc','LIKE', "%$buscar%");
    }

    public function ordenes()
    {
    	return $this->hasOne('App\Ordenes');
    }

}
