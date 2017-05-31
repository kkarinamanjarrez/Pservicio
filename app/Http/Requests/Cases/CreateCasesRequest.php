<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCasesRequest extends FormRequest
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
            'date'=>'required|unique:cases,date',
            'medias_id'=>'required|not_in:0',
        ];
    }

    public function messages()
    {
        return [
            'medias_id.not_in'=>'El campo Medio de Comunicacion no ha sido agregada',
        ];
    }
}
