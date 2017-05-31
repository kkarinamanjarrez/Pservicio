<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Route;

class UpdateCasesRequest extends FormRequest
{
   public function __construct(Route $route)
    {
        $this->route=$route;
    }
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
            'date'=>'required|min:3|unique:cases,date',
            'medias_id'=>'required|not_in:0',
        ];
    }

    public function messages()
    {
        return [
            'medias_id.not_in'=>'El campo tipo Medio de Comunicacion es obligatorio',
        ];
    }
}
