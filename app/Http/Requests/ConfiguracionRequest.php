<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ConfiguracionRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //true para activarlo
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titulo' => 'min:4|required',
            'mensaje' => 'min:4|required',
            'urlimg' => 'min:8|required',
            'estatus' => 'boolean|required'
        ];
    }
}
