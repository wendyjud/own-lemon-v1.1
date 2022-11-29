<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PedidoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'nombre'    => 'required|string|max:8',
            'cantidad'  => 'required',
            'modalidad' => 'required|string|max:20',
            'nombre'    => 'required|string|max:20',
            'apellido'  => 'required|string|max:20',
            'tel'       => 'required|string|max:13',
            'calle'     => 'required|string|max:30',
            'num'       => 'required|string|max:6',
            'col'       => 'required|string|max:30',
            'estado'    => 'required|string|max:20',
            'cod_Postal'=> 'required|integer',
            'rfc_Empresa'=> 'required|string|max:13',
       
        ];
    }
}
