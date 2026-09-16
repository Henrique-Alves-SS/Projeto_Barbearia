<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();

        return view('categoria.index', compact('categorias'));
    }

    public function create()
    {
        return view('categoria.create');
    }

    public function store(Request $request)
    {
        Categoria::create($this->validar($request));

        return redirect()->route('categorias.index')->with('successo', 'Categoria criada com sucesso!');
    }

    public function validar(Request $request)
    {
        return $request->validate([
            'nome' => ['required', 'string', 'max:100'],
            'descricao' => ['nullable', 'string', 'max:1000'],
        ], [
            'nome.required' => 'Informe o nome da categoria.',
            'nome.string' => 'O nome deve ser uma string.',
            'nome.max' => 'O nome não pode ter mais de 100 caracteres.',
            'descricao.string' => 'A descrição deve ser uma string.',
            'descricao.max' => 'O campo descrição não pode ter mais de 1000 caracteres.',
        ]);
    }

    public function show(Categoria $categoria)
    {
        return view('categoria.show', compact('categoria'));
    }

    public function edit(Categoria $categoria)
    {
        return view('categoria.edit', compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria)
    {
        $categoria->update($this->validar($request));

        return redirect()->route('categorias.index')->with('successo', 'Categoria atualizada com sucesso!');
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();

        return redirect()->route('categorias.index')->with('successo', 'Categoria deletada com sucesso!');
    }
}
