<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController2 extends Controller
{
    public function index()
    {
        $users = User::all(); // Recupera todos os usuários do banco de dados
        return view('users.index', compact('users')); // Retorna a view com a lista de usuários
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save(); // Salva o novo usuário no banco de dados

        return redirect()->route('users.index'); // Redireciona para a lista de usuários após salvar
    }

    public function show($id)
    {
        $user = User::find($id); // Encontra o usuário pelo ID no banco de dados

        return view('users.show', compact('user')); // Retorna a view com os detalhes do usuário
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id); // Encontra o usuário pelo ID no banco de dados
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save(); // Atualiza os dados do usuário no banco de dados

        return redirect()->route('users.index'); // Redireciona para a lista de usuários após atualizar
    }

    public function destroy($id)
    {
        $user = User::find($id); // Encontra o usuário pelo ID no banco de dados
        $user->delete(); // Exclui o usuário do banco de dados

        return redirect()->route('users.index'); // Redireciona para a lista de usuários após excluir
    }
}
