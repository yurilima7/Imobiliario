<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
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

        if($request->locador ==  1) {
            
        } else {

        }

        $imoveis = DB::table('tblendereco')
            ->join('tblimovel', 'tblendereco.fk_imovel', '=', 'tblimovel.idImovel')
            ->join('tblimagem', 'tblimovel.idImovel', '=', 'tblimagem.fk_imovel')
            ->where('tblimovel.status', '=', 'aberto')->get();

        return view('rent.rent', compact('imoveis'));
    }

    // LOGIN
    public function login(Request $request) {
        $user = DB::table('tblusuario')
        ->where('tblusuario.email', '=', $request->email)->get();

        $idUsuario = $user[0]->idUsuario;

        $imoveis = DB::table('tblendereco')
            ->join('tblimovel', 'tblendereco.fk_imovel', '=', 'tblimovel.idImovel')
            ->join('tblimagem', 'tblimovel.idImovel', '=', 'tblimagem.fk_imovel')
            ->where('tblimovel.status', '=', 'aberto')->get();
        
        if ($user[0]->senha == $request->senha) {
            if ($user[0]->isLocator == 1) {
                $locador = DB::table('tbllocador')
                ->where('tbllocador.fk_usuario', '=', $idUsuario)->get();

                $idLocador = $locador[0]->idLocador;

                return view("rent.rent_connected", compact('imoveis', 'idLocador', 'idUsuario'));
            } else {
                $locatario = DB::table('tbllocatario')
                ->where('tbllocatario.fk_usuario', '=', $idUsuario)->get();

                $idLocatario = $locatario[0]->idLocatario;

                return view("rent.rent_loc", compact('imoveis', 'idLocatario', 'idUsuario'));
            }
        } else {
  
            return view("rent.rent", compact('imoveis'));
        }
    }
}
