<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SetorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|min:3|max:50', 
            'descricao' => 'max:50'
        ];
    }
    public function messages()
    {
        return [
            'nome.required' => 'Preencha o campo',
            'nome.min' => 'O campo deve ter no minino 3 caracteres',
            'nome.max' => 'O campo deve ter no maximo 50 caracteres',

            'descricao.max' => 'O campo deve ter no maximo 50 caracteres'
        ];
    }
}
