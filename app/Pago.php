<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = 'pago';

    public function scopeSearch($query, $buscar){
    	return $query->where('nombre','LIKE', "%$buscar%");
    }
}
