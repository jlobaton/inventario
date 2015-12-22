<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class InventarioRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'codpro' => 'min:4|max:20|required|unique:inventario,codpro',
            'descr' => 'min:4|required',
            'video' => 'min:1',
            'audio' => 'min:4',
            'resolucion'  => 'min:4',
            'almacenamiento' => 'min:4',
            'grabacion' => 'min:4',
            'general' => 'min:4',
            'exist' => 'min:1|integer|required',
            'oferta' => 'boolean|required',
            'precio' => 'min:2|required'
        ];
    }
}
