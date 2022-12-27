<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // REGISTO DE USUÁRIO
    public function insertUser(Request $request) {
        $user = User::create([
            'nome' => '', 
            'cpf' => '', 
            'email' => $request->email,
            'senha' => $request->senha,
            'isLocator' => 0,
            'telefone' => '',
        ]);

        return view('register.register', ['user' => $user]);
    }

    public function register($idUsuario) {
        $user = User::findOrFail($idUsuario);
        return view('register.register', ['user' => $user]);
    }

    public function insertData(Request $request, $idUsuario) {
        $user = User::findOrFail($idUsuario);

        $user->update([
            'nome' => $request->nome, 
            'cpf' => $request->cpf, 
            'email' => $user->email,
            'senha' => $user->senha,
            'isLocator' => $request->locator,
            'telefone' => $request->telefone,
        ]);

        return view('rent.rent_connected', ['user' => $user]);
    }
}
