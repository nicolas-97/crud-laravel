<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
            'name' => "required|max:60|unique:books,name,{$this->book->id}",
            'length' => 'required|numeric',
            'isbn' => "required|max:60|unique:books,isbn,{$this->book->id}",
            'category_id' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre no puede estar vacio',
            'name.max' => 'El nombre es demasiado largo',

            'length.required' => 'El numero de paginas no puede estar vacio',
            'length.numeric' => 'El numero de paginas debe ser un numero',

            'isbn.required' => 'El isbn no puede estar vacio',
            'isbn.max' => 'El isbn es demasiado largo',

            'category_id.required' => 'Seleccione una categoria',
            'category_id.numeric' => 'Categoria incorrecta',
        ];
    }
}
