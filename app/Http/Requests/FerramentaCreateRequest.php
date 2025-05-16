<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FerramentaCreateRequest extends FormRequest
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
            'ferramenta' => "required|min:5|max:50",
            'descricao' => "required|min:3|max:50",
            'status' => "required"
        ];
    }

    public function messages()
    {   
        return [
            'ferramenta.required' => 'O campo é obrigatorio', 
            'ferramenta.min' => 'O campo espera no minino 5 caracteres', 
            'ferramenta.max' => 'O campo espera no maximo 50 caracteres' ,

            'descricao.required' => 'O campo é obrigatorio',
            'descricao.min' => 'O campo espera no minimo 3 caracteres',
            'descricao.max' => 'O campo espera no maximo 50 caracteres',

            'status.required' => 'Preencha o campo'
        ];
    }
}
