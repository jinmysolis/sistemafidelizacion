<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditRequest extends Request
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
            'name'=> 'required|min:4|max:255',
                        'apellido'=>'required',
                        'telefono'=>'required|numeric',
                        'pais'=>'required',
                        'ciudad'=>'required',
                        'sexo'=>'required',
                        'email'=>'required|email',
                       
        ];
    }
}
