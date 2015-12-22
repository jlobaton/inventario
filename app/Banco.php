<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banco extends Model
{
	use SoftDeletes;

    protected $table = 'banco';

    protected $fillable = ['nombre','nrocuenta', 'tipocuenta', 'cedula', 'beneficiario', 'email'];

    protected $dates = ['delete_at'];

    public function scopeSearch($query, $buscar){
    	return $query->where('nombre','LIKE', "%$buscar%");
    }

    public function ordernes()
    {
    	return $this->hasOne('App\Ordenes');
    }
}
