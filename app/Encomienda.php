<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Encomienda extends Model
{
	use SoftDeletes;

    protected $table = 'encomienda';

    protected $fillable = ['nombre','observacion', 'urltracking'];

    protected $dates = ['delete_at'];

    public function scopeSearch($query, $buscar){
    	return $query->where('nombre','LIKE', "%$buscar%");
    }

    public function ordernes()
    {
    	return $this->hasOne('App\Ordenes');
    }
}
