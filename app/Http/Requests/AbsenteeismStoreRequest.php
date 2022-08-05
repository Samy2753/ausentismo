<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AbsenteeismStoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [

        


        ];

    }

    public function messages(){
        return [

        //'name.required'=>'Debe ingresar un nombre de usuario',
       // 'email.required'=>'Debe ingresar un email válido',
        //'password.required'=>'Debe ingresar una contraseña'
        ];
    }
}
