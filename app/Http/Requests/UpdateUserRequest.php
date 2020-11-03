<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name' => "required|max:60|unique:users,name,{$this->user->id}",
            'dni' => "required|max:60|unique:users,dni,{$this->user->id}",
            'isAdmin' => 'required|numeric',
            'password' => 'required|min:6|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'password.confirmed' => 'Las contraseñas no coinciden',
            'password.min' => 'La contraseña debe tener un minimo de 6 caracteres',
            'password.required' => 'La contrasaeña no debe estar vacia',
        ];
    }
}
