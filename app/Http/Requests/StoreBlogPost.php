<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
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
            'content' => 'required|min:5|max:255',
            'user_id' => 'required|min:1|max:2',
            'post_id' => 'required|min:1|max:2',
        ];
    }

    public function messages()
    {
        return [
            'content.required' => 'El contenido es obligatorio',
            'content.min' => 'Ingresa más de 4 caracteres como mínimo. ¡Ánimo escribre!',
            'content.max' => 'Máximo 255 carácteres',

        ];
    }
}
