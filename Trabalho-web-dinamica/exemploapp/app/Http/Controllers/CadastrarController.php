<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objeto;

class CadastrarController extends Controller
{
    public function salvar(Request $request){
        $request->validate([
            'linha' => 'required|min:3|max:50',
            'data' => 'required|date',
            "booleano" => 'required|boolean',
            "decimal" => 'required|decimal:2',
            "inteiro" => 'required|integer',
        ],
        [
            'linha.required' => 'O campo texto curto é obrigatório.',
            'linha.min' => 'O campo texto curto deve ter no mínimo 3 caracteres.',
            'linha.max' => 'O campo texto curto deve ter no máximo 50 caracteres.',
            'data.required' => 'O campo data é obrigatório.',
            'data.date' => 'O campo data deve ser uma data válida.',
            'booleano.required' => 'O campo booleano é obrigatório.',
            'booleano.boolean' => 'O campo booleano deve ser verdadeiro ou falso.',
            'decimal.required' => 'O campo decimal é obrigatório.',
            'decimal.decimal' => 'O campo decimal deve ser um número decimal com até 2 casas decimais.',
            'inteiro.required' => 'O campo inteiro é obrigatório.',
            'inteiro.integer' => 'O campo inteiro deve ser um número inteiro.',
        ]);
        $objeto = new Objeto();
        $objeto->fill($request->all());
        $objeto->save();
        
        return view('cadastroSalvo');
    }
}
