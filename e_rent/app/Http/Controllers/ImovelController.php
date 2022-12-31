<?php

namespace App\Http\Controllers;

use App\Models\Imovel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImovelController extends Controller
{
    // HOME DA PÁGINA
    public function home(Request $request) {
        $imoveis = DB::table('tblendereco')
            ->join('tblimovel', 'tblendereco.fk_imovel', '=', 'tblimovel.idImovel')
            ->join('tblimagem', 'tblimovel.idImovel', '=', 'tblimagem.fk_imovel')
            ->where('tblimovel.status', '=', 'aberto')->get();
  
        return view("rent.rent", compact('imoveis'));
    }

    public function homeConnected() {
        $imoveis = DB::table('tblendereco')
            ->join('tblimovel', 'tblendereco.fk_imovel', '=', 'tblimovel.idImovel')
            ->join('tblimagem', 'tblimovel.idImovel', '=', 'tblimagem.fk_imovel')
            ->where('tblimovel.status', '=', 'aberto')->get();

        return view("rent.rent_connected", compact('imoveis'));
    }

    // LISTA OS IMÓVEIS DISPONÍVEIS
    public function indexImoveis(Request $request) {
        $imoveis = DB::table('tblendereco')
            ->join('tbblimovel', 'tblendereco.fk_imovel', '=', 'tblimovel.idImovel')
            ->join('tblimagem', 'tblimovel.idImovel', '=', 'tblimagem.fk_imovel')
            ->where('tblimovel.status', '=', 'aberto')->get();

        return view('rent.rent', compact('imoveis'));
    }

    // DESCRIÇÃO DO IMÓVEL
    public function showImovel($idImovel) {
        $imovel = DB::table('tblendereco')
            ->join('tblimovel', 'tblendereco.fk_imovel', '=', 'tblimovel.idImovel')
            ->join('tblimagem', 'tblimovel.idImovel', '=', 'tblimagem.fk_imovel')
            ->where('tblimovel.idImovel', '=', $idImovel)->get();

        return view('property_description.property', ['imovel' => $imovel]);
    }

    public function showImovelConnected($idImovel) {
        $imovel = DB::table('tblendereco')
            ->join('tblimovel', 'tblendereco.fk_imovel', '=', 'tblimovel.idImovel')
            ->join('tblimagem', 'tblimovel.idImovel', '=', 'tblimagem.fk_imovel')
            ->where('tblimovel.idImovel', '=', $idImovel)->get();

        return view('property_description.property_connected', ['imovel' => $imovel]);
    }
}
