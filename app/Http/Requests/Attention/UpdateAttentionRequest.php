<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Route;

class UpdateAttentionRequest extends FormRequest
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
            'date'=>'required|unique:attentions,date',
            'cases_id'=>'required|not_in:0',
            'means_id'=>'required|not_in:0',
            'officials_id'=>'required|not_in:0',
        ];
    }

    public function messages()
    {
        return [
            'cases_id.not_in'=>'El campo Caso no ha sido agregada',
            'means_id.not_in'=>'El campo Recurso no ha sido agregada',
            'officials_id.not_in'=>'El Funcionario Caso no ha sido agregada',
        ];
    }
}
