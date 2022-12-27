<?php

namespace App\Http\Controllers;

use App\Models\Imovel;
use Illuminate\Http\Request;

class ImovelController extends Controller
{
    // HOME DA PÁGINA
    public function home() {
        return view("rent.rent");
    }

    public function home_connected() {
        return view("rent.rent_connected");
    }

    public function indexImoveis(Request $request) {
        $imoveis = Imovel::get();

        return view('rent.rent', compact('imoveis'));
    }
}
