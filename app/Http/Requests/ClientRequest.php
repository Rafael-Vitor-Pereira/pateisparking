<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'board' => "bail|required|min:7|max:8|unique:clients,board,$this->client",
            'name' => 'bail|required|min:3|max:70',
            'cpf' => "bail|digits:11|required",
            'type_vehicle' =>'bail|required',
        ];
    }
}
