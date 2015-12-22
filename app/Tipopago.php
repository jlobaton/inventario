<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipopago extends Model
{
    protected $table = 'tipopago';

    protected $fillable = ['nombre'];

    public function scopeSearch($query, $buscar){
    	return $query->where('nombre','LIKE', "%$buscar%");
    }
}
