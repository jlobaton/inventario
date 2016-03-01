<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Inv_imag extends Model
{
    protected $table = 'inv_imag';

    protected $fillable = ['inventario_id','codpro','urlimagen'];

    public function inventario()
    {
    	return $this->belongsTo('App\Inventario');
    }

    protected $dates = ['delete_at'];

    public function scopeSearch($query, $buscar){
    	return $query->where('codpro','LIKE', "%$buscar%");
    }

}
