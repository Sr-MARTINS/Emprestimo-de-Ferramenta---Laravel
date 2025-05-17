<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuncionarioRequest extends FormRequest
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
            'nome'   => 'required|min:3|max:50',
            'cpf'    => 'required|size:11',
            'setor'  => 'required|min:3|max:50',
            'status' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo com preenchimento obrigatorio',
            'nome.min' => 'O campo deve ter no minimo 3 caracteres',
            'nome.max' => 'O campo deve ter no max 50 caracteres',

            'cpf.required' => 'O campo com preenchimento obrigatorio',
            'cpf.size' => 'O cpf deve ter 11 caracteres',
            
            'setor.required' => 'O campo com preenchimento obrigatorio',
            'setor.min'      => 'O campo deve ter no minimo 5 caracteres',
            'setor.max'      => 'O campo deve ter no max 50 caracteres',
        
            'status.required' => 'O campo deve ser preenchido',
        ];
    }
}
