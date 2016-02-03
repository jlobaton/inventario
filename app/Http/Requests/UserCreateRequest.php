<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserCreateRequest extends Request
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
            'name'     => 'min:3|required|unique:users,name',
            'password' => 'min:4|required',
            'email'    => 'min:4|email|required|unique:users,email',
            'tipo'     => 'required'
        ];
    }
}
