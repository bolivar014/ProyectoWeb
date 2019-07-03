<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            //  
            'user'=>['required','max:160']
            ];
    }

    //
    public function users()
    {
        return [
            'user.required'=>'Por Favor, Escribe tu mensaje...',
            'user.max'=>'El Mensaje no debe superar 150 caracteres.'
        ];
    }
}
