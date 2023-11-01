<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOnibusRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        /*
        | ----------------------------------------------------------------
        | Request de Onibus
        | ----------------------------------------------------------------
        | Validacoes para permitir a insercao dos dados na tabela de Onibus
        */
        return [
            'numeracao' => [
                'required',
                'min:3', // TODO: Mudar isso daqui depois
                'max:10', // TODO: Mudar isso daqui também depois
                'unique:onibus,numeracao',
            ],
            'id_empresa' => [
                'exists:empresas,id_empresa',
            ],
        ];
    }
}