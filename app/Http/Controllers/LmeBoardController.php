<?php

namespace App\Http\Controllers;

use App\Cabo;
use App\Tarifa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LmeBoardController extends Controller
{
    public function index()
    {
        $tarifa = Tarifa::find(1);
        $cabos = Cabo::all();

        $lme = DB::table('lmes')
            ->select('id', 'data', 'usd_ton_cobre', 'usd_ton_chumbo', 'rate_usd_euro', 'lme_cobre_kg', 'lme_chumbo_kg', 'custo_venda', 'custo_mix')
            ->orderBy('data', 'desc')
            ->paginate(10);

        $plastico = DB::table('lmes')
            ->select('id', DB::raw('preco_venda_plastico as preco_venda'), DB::raw('preco_metal_kg_cabo_plastico as preco_metal_kg_cabo'))
            ->orderBy('data', 'desc')
            ->paginate(10);

        $chumbo = DB::table('lmes')
            ->select('id', DB::raw('preco_venda_chumbo as preco_venda'), DB::raw('preco_metal_kg_cabo_chumbo as preco_metal_kg_cabo'))
            ->orderBy('data', 'desc')
            ->paginate(10);

        $materiais = [$plastico, $chumbo];

        return view('pages.lme-board.index', [
            'tarifa' => $tarifa,
            'cabos' => $cabos,
            'lme' => $lme,
            'materiais' => $materiais,
        ]);
    }
}
