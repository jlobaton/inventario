<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BancoRequest extends Request
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
            'nombre'       => 'min:3|required',
            'nrocuenta'    => 'min:10|max:20|required',
            'tipocuenta'   => 'min:4|max:20|required',
            'cedula'       => 'min:5|max:12|required',
            'beneficiario' => 'min:4|required',
            'email'        => 'min:4|email|required'
        ];
    }
}
