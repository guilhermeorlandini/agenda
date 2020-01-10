<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class StoreContato extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => "required|max:100",
            'email' => 'nullable|email|max:100',
            'tel1' => 'nullable|regex:^[1-9]{2}[1-9]{1}[0-9]{5,6}^',
            'tel2' => 'nullable|regex:^[1-9]{2}[1-9]{1}[0-9]{5,6}^',
            'endereco1' => 'nullable|max:100',
            'endereco2' => 'nullable|max:100',
            'cep1' => 'nullable|regex:^[0-9]{2}[0-9]{3}[0-9]{3}^',
            'cep2' => 'nullable|regex:^[0-9]{2}[0-9]{3}[0-9]{3}^',
            'cidade1' => 'nullable|max:100',
            'cidade2' => 'nullable|max:100'
        ];
    }

    public function messages() 
    {   
            return 
            [       'nome.required' => 'O Nome é obrigatório',
                    'nome.max' => 'O Nome é composto por 100 caracteres',   
                    'email.max' => 'O E-mail é composto por 100 caracteres', 
                    'email.email' => 'Insira um formato válido para o E-mail (Exemplo@ex.com.br)',
                    'tel1.regex' => 'Insira um número válido DDDNÚMERO', 
                    'tel2.regex' => 'Insira um número válido DDDNÚMERO', 
                    'endereco1.max' => 'O endereço é composto por no máximo 100 caracteres',
                    'endereco2.max' => 'O endereço é composto por no máximo 100 caracteres',
                    'cep1.regex' => 'Insira um CEP válido EX : 14300000',
                    'cep2.regex' => 'Insira um CEP válido EX : 14300000',
            ]; 
    }
}
