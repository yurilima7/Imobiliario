<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use App\Models\Imagem;
use App\Models\Imovel;
use App\Models\Locatario;
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

    public function homeConnected($idLocador, $idUsuario) {
        $imoveis = DB::table('tblendereco')
            ->join('tblimovel', 'tblendereco.fk_imovel', '=', 'tblimovel.idImovel')
            ->join('tblimagem', 'tblimovel.idImovel', '=', 'tblimagem.fk_imovel')
            ->where('tblimovel.status', '=', 'aberto')->get();

        return view("rent.rent_connected", compact('imoveis', 'idLocador', 'idUsuario'));
    }

    public function homeLoc($idLocatario, $idUsuario) {
        $imoveis = DB::table('tblendereco')
            ->join('tblimovel', 'tblendereco.fk_imovel', '=', 'tblimovel.idImovel')
            ->join('tblimagem', 'tblimovel.idImovel', '=', 'tblimagem.fk_imovel')
            ->where('tblimovel.status', '=', 'aberto')->get();

        return view("rent.rent_loc", compact('imoveis', 'idLocatario', 'idUsuario'));
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

    public function showImovelConnected($idImovel, $idLocatario, $idUsuario) {
        $imovel = DB::table('tblendereco')
            ->join('tblimovel', 'tblendereco.fk_imovel', '=', 'tblimovel.idImovel')
            ->join('tblimagem', 'tblimovel.idImovel', '=', 'tblimagem.fk_imovel')
            ->where('tblimovel.idImovel', '=', $idImovel)->get();

        return view('property_description.property_connected', compact('imovel', 'idLocatario', 'idUsuario'));
    }

    // IMÓVEIS DE UM LOCADOR
    public function showImovelLocador($idLocador, $idUsuario) {
        $imoveis = DB::table('tblimovel')
            ->join('tbllocador', 'tbllocador.idLocador', '=', 'tblimovel.fk_locador')
            ->join('tblendereco', 'tblimovel.idImovel', '=', 'tblendereco.fk_imovel')
            ->join('tblimagem', 'tblimovel.idImovel', '=', 'tblimagem.fk_imovel')
            ->where('tbllocador.idLocador', '=', $idLocador)->get();

        return view('locator.locator', compact('imoveis', 'idLocador', 'idUsuario'));
    }

    // INSERIR IMÓVEL
    public function createImovel($idUsuario, $idLocador) {
        return view('add_announcement.announcement', compact('idLocador', 'idUsuario'));
    }

    public function registerImovel(Request $request, $idUsuario, $idLocador) {
        $imovel = Imovel::create([
            'valor' => $request->valor,
            'descricao' => $request->descricao,
            'status' => 'aberto',
            'fk_locador' => $idLocador,
        ]);

        Endereco :: create([
            'fk_imovel' => $imovel->idImovel,
            'estado' => $request->estado,
            'cidade' => $request->cidade,
            'bairro' => $request->bairro,
            'rua' => $request->rua,
            'numero' => $request->numero,
        ]); 

        Imagem :: create([
            'fk_imovel' => $imovel->idImovel,
            'imagem' => $request->imagem,
            'fk_locador' => $idLocador,
        ]);

        $imoveis = DB::table('tblimovel')
            ->join('tbllocador', 'tbllocador.idLocador', '=', 'tblimovel.fk_locador')
            ->join('tblendereco', 'tblimovel.idImovel', '=', 'tblendereco.fk_imovel')
            ->join('tblimagem', 'tblimovel.idImovel', '=', 'tblimagem.fk_imovel')
            ->where('tbllocador.idLocador', '=', $idLocador)->get();

        return view('locator.locator', compact('imoveis', 'idLocador', 'idUsuario'));
    }

    // EDITAR IMÓVEL
    public function updateHouse($idUsuario, $idLocador, $idImovel) {
        $imovel = DB::table('tblendereco')
            ->join('tblimovel', 'tblendereco.fk_imovel', '=', 'tblimovel.idImovel')
            ->join('tblimagem', 'tblimovel.idImovel', '=', 'tblimagem.fk_imovel')
            ->where('tblimovel.idImovel', '=', $idImovel)->get();

        return view('locator.edit_announcement', compact('idLocador', 'idUsuario', 'idImovel', 'imovel'));
    }

    public function updateImovel(Request $request, $idUsuario, $idLocador) {
        $imovel = Imovel::findOrFail($request->idImovel);
        $imovel->update([
            'valor' => $request->valor,
            'descricao' => $request->descricao,
            'status' => 'aberto',
            'fk_locador' => $idLocador,
        ]);

        $endereco = Endereco::findOrFail($request->idEndereco);
        $endereco->update([
            'fk_imovel' => $request->idImovel,
            'estado' => $request->estado,
            'cidade' => $request->cidade,
            'bairro' => $request->bairro,
            'rua' => $request->rua,
            'numero' => $request->numero,
        ]);

        $imagem = Imagem::findOrFail($request->idImagem);
        $imagem->update([
            'fk_imovel' => $request->idImovel,
            'imagem' => $request->imagem,
            'fk_locador' => $idLocador,
        ]);

        $imoveis = DB::table('tblimovel')
            ->join('tbllocador', 'tbllocador.idLocador', '=', 'tblimovel.fk_locador')
            ->join('tblendereco', 'tblimovel.idImovel', '=', 'tblendereco.fk_imovel')
            ->join('tblimagem', 'tblimovel.idImovel', '=', 'tblimagem.fk_imovel')
            ->where('tbllocador.idLocador', '=', $idLocador)->get();

        return view('locator.locator', compact('imoveis', 'idLocador', 'idUsuario'));
    }

    // DELETAR IMÓVEL
    public function removeImovel(Request $request, $idUsuario, $idLocador) {
        $imovel = Imovel::findOrFail($request->idImovel);
        $endereco = Endereco::findOrFail($request->idEndereco);
        $imagem = Imagem::findOrFail($request->idImagem);

        $imovel->delete();
        $endereco->delete();
        $imagem->delete();

        $imoveis = DB::table('tblimovel')
            ->join('tbllocador', 'tbllocador.idLocador', '=', 'tblimovel.fk_locador')
            ->join('tblendereco', 'tblimovel.idImovel', '=', 'tblendereco.fk_imovel')
            ->join('tblimagem', 'tblimovel.idImovel', '=', 'tblimagem.fk_imovel')
            ->where('tbllocador.idLocador', '=', $idLocador)->get();

        return view('locator.locator', compact('imoveis', 'idLocador', 'idUsuario'));
    }

    // IMÓVEIS LOCATÁRIO
    public function showImovelLocatario($idLocatario, $idUsuario) {
        $imovel = DB::table('tbllocatario')
            ->join('tblimovel', 'tbllocatario.fk_imovel', '=', 'tblimovel.idImovel')
            ->join('tblendereco', 'tblendereco.fk_imovel', '=', 'tblimovel.idImovel')
            ->join('tblimagem', 'tblimagem.fk_imovel', '=', 'tblimovel.idImovel')
            ->where('fk_usuario', '=', $idUsuario)->get();

        return view('renter.renter', compact('imovel', 'idLocatario', 'idUsuario'));
    }

    // ALUGA IMÓVEL
    public function alugaImovel(Request $request, $idLocatario, $idUsuario) {
        $imovelDisp = Imovel::findOrFail($request->idImovel);
        $locatario = Locatario::findOrFail($idLocatario);

        $imovelDisp->update([
            'status' => 'alugado',
        ]);

        $locatario->update([
            'fk_imovel' => $request->idImovel,
        ]);

        $imovel = DB::table('tbllocatario')
            ->join('tblimovel', 'tbllocatario.fk_imovel', '=', 'tblimovel.idImovel')
            ->join('tblendereco', 'tblendereco.fk_imovel', '=', 'tblimovel.idImovel')
            ->join('tblimagem', 'tblimagem.fk_imovel', '=', 'tblimovel.idImovel')
            ->where('fk_usuario', '=', $idUsuario)->get();

        return view('renter.renter', compact('imovel', 'idLocatario', 'idUsuario'));
    }

    // MODIFICAR ALUGUEL
    public function updateHouseAluguel($idUsuario, $idLocatario, $idImovel) {
        $imovel = DB::table('tbllocatario')
            ->join('tblimovel', 'tbllocatario.fk_imovel', '=', 'tblimovel.idImovel')
            ->join('tblendereco', 'tblendereco.fk_imovel', '=', 'tblimovel.idImovel')
            ->join('tblimagem', 'tblimagem.fk_imovel', '=', 'tblimovel.idImovel')
            ->where('fk_usuario', '=', $idUsuario)->get();

        return view('renter.edit_rent', compact('idLocatario', 'idUsuario', 'idImovel', 'imovel'));
    }

    public function updateAluguel($idUsuario, $idLocatario, $idImovel) {
        $imovelDisp = Imovel::findOrFail($idImovel);
        $locatario = Locatario::findOrFail($idLocatario);

        $imovelDisp->update([
            'status' => 'aberto',
        ]);

        $locatario->update([
            'fk_imovel' => NULL,
        ]);

        $imovel = DB::table('tbllocatario')
            ->join('tblimovel', 'tbllocatario.fk_imovel', '=', 'tblimovel.idImovel')
            ->join('tblendereco', 'tblendereco.fk_imovel', '=', 'tblimovel.idImovel')
            ->join('tblimagem', 'tblimagem.fk_imovel', '=', 'tblimovel.idImovel')
            ->where('fk_usuario', '=', $idUsuario)->get();

        return view('renter.renter', compact('imovel', 'idLocatario', 'idUsuario'));
    }
}
