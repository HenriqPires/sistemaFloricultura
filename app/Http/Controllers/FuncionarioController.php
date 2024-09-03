<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{

    public function __construct()
    {
        // Aplica o middleware 'auth' a todas as ações do controlador
        $this->middleware('auth');
    }

    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionarios.index', compact('funcionarios'));
    }

    
    public function create()
    {
        return view('funcionarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string|max:20',
            'email' => 'required|email|max:255|unique:funcionarios',
        ]);

        Funcionario::create($request->all());

        return redirect()->route('funcionarios.index')->with('success', 'Funcionário criado com sucesso.');
    }

    public function show($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        return view('funcionarios.show', compact('funcionario'));
    }

    public function edit($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        return view('funcionarios.edit', compact('funcionario'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string|max:20',
            'email' => 'required|email|max:255|unique:funcionarios,email,' . $id,
        ]);

        $funcionario = Funcionario::findOrFail($id);
        $funcionario->update($request->all());

        return redirect()->route('funcionarios.index')->with('success', 'Funcionário atualizado com sucesso.');
    }
    public function destroy($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->delete();

        return redirect()->route('funcionarios.index')->with('success', 'Funcionário excluído com sucesso.');
    }
}
