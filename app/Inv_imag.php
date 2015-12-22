<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inv_imag extends Model
{
    protected $table = 'inv_imag';

    protected $fillable = ['inventario_id','codpro','urlimagen'];

    public function inventario()
    {
    	return $this->belongsTo('App\Inventario');
    }

}
