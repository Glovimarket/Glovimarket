<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsers extends FormRequest
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
            'first_name' => 'required',
            'second_name' => 'required',
            'last_name' => 'required',
            'second_surname' => 'required',
            'telephone' => 'required',
            'direction' => 'required',
            'email' => 'required',
            'password' => 'required',
        ];
    }

    public function attributes()
    {
        return[
            'first_name' => 'Primer Nombre',
            'second_name' => 'Segundo Nombre',
            'last_name' => 'Primer Apellido',
            'second_surname' => 'Segundo Apellido',
            'telephone' => 'Telefono',
            'direction' => 'Direccion',
            'password' => 'Contraseña'
        ];
    }
}
