<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Route;

class UpdateOfficialRequest extends FormRequest
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
            'name'=>'required|min:3|unique:officials,name',
            'address'=>'required|min:3|unique:officials,address',
            'phone'=>'required|min:3|unique:officials,phone',
            'positions_id'=>'required|not_in:0',
        ];
    }

    public function messages()
    {
        return [
            'positions_id.not_in'=>'El campo Cargo no ha sido agregada',
        ];
    }
}
