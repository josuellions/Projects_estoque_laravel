<?php

namespace estoque\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            //
            'nome' => 'required|max:10',
            'descricao' => 'required|max:35',
            'valor' => 'required|numeric|min:1',
            'quantidade' => 'required|numeric|min:1'
        ];
    }

    // Atribuindo mensagem de alerta validação 
    public function messages( ) {
        return [
            'required' => 'O :attribute do Produto é obrigatório!',
            'nome.required' => 'Esta campo :attribute é extremamente nescessário!!!'
        ];
    }

}
