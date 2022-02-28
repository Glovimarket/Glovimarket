<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProducts extends FormRequest
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
            'name' => 'required',
            'amount' => 'required',
            'value' => 'required',
            'description' => 'required',
            'categories_id' => 'required',
            'url' => 'required',
        ];
    }

    public function attributes()
    {
        return[
            'name' => 'Nombre',
            'amount' => 'Cantidad',
            'value' => 'Valor',
            'description' => 'Descripcion',
            'categories_id' => 'Categoria',
            'url' => 'Url',
        ];
    }
}
