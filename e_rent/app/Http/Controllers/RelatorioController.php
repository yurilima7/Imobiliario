<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RelatorioController extends Controller
{
    public function relatorioSistema() {
        $qtdUsuarios = DB::table('tblusuario')->count();
        $qtdLocadores = DB::table('tbllocador')->count();
        $qtdLocatarios = DB::table('tbllocatario')->count();
        $qtdImoveis = DB::table('tblimovel')->count();
        $qtdDispAluguel = DB::table('tblimovel')->where('tblimovel.status', '=', 'aberto')->count();
        $qtdAlugados = DB::table('tblimovel')->where('tblimovel.status', '=', 'alugado')->count();

        return view('report_sis.report', 
            compact('qtdUsuarios', 'qtdLocadores', 'qtdLocatarios',
                    'qtdImoveis', 'qtdDispAluguel', 'qtdAlugados'));
    }
}
