<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    protected $table = 'estados';

    protected $fillable = ['estados','is_3166-2'];


    public function scopeSearch($query, $buscar){
    	return $query->where('estados','LIKE', "%$buscar%");
    }

    public function ordernes()
    {
    	return $this->hasOne('App\Ordenes');
    }
}
