<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gcm_user extends Model
{
    protected $table = 'gcm_users';

    protected $fillable = ['nombre','email'];

    public function scopeSearch($query, $buscar){
    	return $query->where('nombre','LIKE', "%$buscar%");
    }
}
