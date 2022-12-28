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
            ->join('tblimovel', 'tblendereco.fk_imovel', '=', 'tblimovel.idImovel')->get();
  
        return view("rent.rent", compact('imoveis'));
    }

    public function homeConnected() {
        $imoveis = DB::table('tblendereco')
            ->join('tblimovel', 'tblendereco.fk_imovel', '=', 'tblimovel.idImovel')->get();

        return view("rent.rent_connected", compact('imoveis'));
    }

    public function indexImoveis(Request $request) {
        $imoveis = Imovel::get();
        return view('rent.rent', compact('imoveis'));
    }

    public function showImovel($idImovel) {
        $imovel = DB::table('tblendereco')
            ->join('tblimovel', 'tblendereco.fk_imovel', '=', 'tblimovel.idImovel')
            ->where('tblimovel.idImovel', '=', $idImovel)->get();

        return view('property_description.property', ['imovel' => $imovel]);
    }

    public function showImovelConnected($idImovel) {
        $imovel = DB::table('tblendereco')
            ->join('tblimovel', 'tblendereco.fk_imovel', '=', 'tblimovel.idImovel')
            ->where('tblimovel.idImovel', '=', $idImovel)->get();

        return view('property_description.property_connected', ['imovel' => $imovel]);
    }
}
