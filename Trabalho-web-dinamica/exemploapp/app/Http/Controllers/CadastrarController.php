<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Musica;

class CadastrarController extends Controller
{
    public function salvar(Request $request){
        $request->validate([
            'titulo' => 'required|string|max:50',
            'artista' => 'required|string|max:50',
            "genero" => 'required|string|max:50',
            "ano_criacao" => 'required|date',
            "duracao" => 'required|string',
        ],
        [
            'titulo.required' => 'O campo título da música é obrigatório.',
            'titulo.max' => 'O campo título da música deve ter no máximo 50 caracteres.',
            'artista.required' => 'O campo artista/banda é obrigatório.',
            'artista.max' => 'O campo artista/banda deve ter no máximo 50 caracteres.',
            'genero.required' => 'O campo gênero é obrigatório.',
            'genero.max' => 'O campo gênero deve ter no máximo 50 caracteres.',
            'ano_criacao.required' => 'O campo ano de criação é obrigatório.',
            'ano_criacao.date' => 'O campo ano de criação deve ser uma data válida.',
            'duracao.required' => 'O campo duração da música é obrigatório.',
            'duracao.string' => 'O campo duração da música deve ser uma string.',
        ]);
        $musica = new Musica();
        $musica->fill($request->all());
        $musica->save();
        
        return view('cadastroSalvo');
    }
}
