<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enviado extends Model
{
    protected $table = 'enviados';

    protected $fillable = ['ordenes_id','fecha', 'nroguia'];

    protected $dates = ['delete_at', 'fecha'];

    public function scopeSearch($query, $buscar){
        return $query->where('nroguia','LIKE', "%$buscar%");
    }
    public static function prettyDate($fecha){
        $this->attributes['fecha'] = Carbon::createFromDate('d-m-Y', $fecha);
    }

	public function ordenes()
	{
		return $this->belongsTo('App\Ordenes');
	}

}
