<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use DB;

use App\Lme;
use App\Tarifa;
use App\Cabo;
use Illuminate\Http\Request;

class LmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lme = Lme::paginate(12)->onEachSide(1);
        $tarifa = Tarifa::all();

        $plastico = DB::table('cabos')
            ->select('perc_lme_cobre', 'perc_lme_chumbo', 'perc_peso_cobre', 'perc:peso_chumbo')
            ->where('id', 1);
        $chumbo = DB::table('cabos')
            ->select('perc_lme_cobre', 'perc_lme_chumbo', 'perc_peso_cobre', 'perc:peso_chumbo')
            ->where('id', 2);

        return view('pages.lme.index', ['lme' => $lme, 'plastico' => $plastico, 'chumbo' => $chumbo, 'tarifa' => $tarifa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.lme.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $lme = Lme::all();

        $this->validate($request, [
            'data' => 'required'
        ]);

        dd($request);

        if ($lme->usd_ton_cobre != "" && $lme->usd_ton_chumbo != "" && $lme->rate_usd_euro != "") {

            $lme->usd_ton_cobre = $request->usd_ton_cobre;
            $lme->usd_ton_chumbo = $request->usd_ton_chumbo;
            $lme->rate_usd_euro = $request->rate_usd_euro;

        }

        else if ($lme->usd_ton_cobre == null &&
                $lme->usd_ton_chumbo != null &&
                $lme->rate_usd_euro != null){


                $lme->usd_ton_chumbo = $request->usd_ton_chumbo;
                $lme->rate_usd_euro = $request->rate_usd_euro;

                $lastLme = DB::table('lmes')
                ->select('id', 'data', 'usd_ton_cobre', 'usd_ton_chumbo', 'rate_usd_euro', 'custo_venda', 'custo_mix')
                ->orderBy('data', 'desc')->first();

                $lme->custo_mix = $lastLme->custo_mix;
                $lme->custo_venda = $lastLme->custo_venda;
        }

        if ($lme->usd_ton_cobre == null &&
               $lme->usd_ton_chumbo == null &&
               $lme->rate_usd_euro != null) {

               $lme->rate_usd_euro = $request->rate_usd_euro;

               $lastLme = DB::table('lmes')
                ->select('id', 'data', 'usd_ton_cobre', 'usd_ton_chumbo', 'rate_usd_euro', 'custo_venda', 'custo_mix')
                ->orderBy('data', 'desc')->first();

                $lme->custo_mix = $lastLme->custo_mix;
                $lme->custo_venda = $lastLme->custo_venda;
           }
           if ($lme->usd_ton_cobre != null &&
               $lme->usd_ton_chumbo == null &&
               $lme->rate_usd_euro == null) {

               $lme->usd_ton_cobre = $request->usd_ton_cobre;

               $lastLme = DB::table('lmes')
                ->select('id', 'data', 'usd_ton_cobre', 'usd_ton_chumbo', 'rate_usd_euro', 'custo_venda', 'custo_mix')
                ->orderBy('data', 'desc')->first();

                $lme->custo_mix = $lastLme->custo_mix;
                $lme->custo_venda = $lastLme->custo_venda;

           }
           if ($lme->usd_ton_cobre == null &&
               $lme->usd_ton_chumbo != null &&
               $lme->rate_usd_euro == null) {

               $lme->usd_ton_chumbo = $request->usd_ton_chumbo;

               $lastLme = DB::table('lmes')
                ->select('id', 'data', 'usd_ton_cobre', 'usd_ton_chumbo', 'rate_usd_euro', 'custo_venda', 'custo_mix')
                ->orderBy('data', 'desc')->first();

                $lme->custo_mix = $lastLme->custo_mix;
                $lme->custo_venda = $lastLme->custo_venda;
           }



        //Lme::create($request->all());
        return redirect('lme-board')->with('status', 'Item created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Lme
     * @return \Illuminate\Http\Response
     */
    public function show(Lme $lme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Material
     * @return \Illuminate\Http\Response
     */
    public function edit(Lme $lme)
    {
        return view('pages.lme.edit', ['lme' => $lme]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lme $lme)
    {
        $lme = Lme::find($lme->id);

        $plastico = Cabo::find(1);
        $chumbo = Cabo::find(2);

        $tarifa = Tarifa::find(1);

        $lme->data = $request->data;

        $carbonDate = Carbon::create($lme->data);

        $year = $carbonDate->year;
        $month = $carbonDate->month;

        $lme->id = (int)($month . $year);

        //$lme->id = DB::raw("SELECT MONTH(data) from lmes").DB::raw("SELECT YEAR(data) from lmes");
        $lme->usd_ton_cobre = $request->usd_ton_cobre;
        $lme->usd_ton_chumbo = $request->usd_ton_chumbo;
        $lme->rate_usd_euro = $request->rate_usd_euro;

        if ($lme->usd_ton_cobre != "" && $lme->usd_ton_chumbo != "" && $lme->rate_usd_euro != "") {

            $lme->preco_venda_plastico = ($plastico->perc_lme_cobre * 0.01) * ($lme->lme_cobre_kg_plastico * ($plastico->perc_peso_cobre * 0.01))
                + ($plastico->perc_lme_chumbo * 0.01) * ($lme->lme_chumbo_kg_plastico * ($plastico->perc_peso_chumbo * 0.01));

            $lme->preco_metal_kg_cabo_plastico = $lme->lme_cobre_kg_plastico * ($plastico->perc_peso_cobre * 0.01)
                + ($lme->lme_chumbo_kg_plastico * ($plastico->perc_peso_chumbo * 0.01));

            $lme->lme_cobre_kg_plastico = ($lme->usd_ton_cobre / 1000) / $lme->rate_usd_euro;

            $lme->lme_chumbo_kg_plastico = ($lme->usd_ton_chumbo / 1000) / $lme->rate_usd_euro;

            $lme->preco_venda_chumbo = ($chumbo->perc_lme_cobre * 0.01) * ($lme->lme_cobre_kg_chumbo * ($chumbo->perc_peso_cobre * 0.01))
                + ($chumbo->perc_lme_chumbo * 0.01) * ($lme->lme_chumbo_kg_chumbo * ($chumbo->perc_peso_chumbo * 0.01));

            $lme->preco_metal_kg_cabo_chumbo = $lme->lme_cobre_kg_chumbo * ($chumbo->perc_peso_cobre * 0.01)
                + ($lme->lme_chumbo_kg_chumbo * ($chumbo->perc_peso_chumbo * 0.01));

            $lme->lme_cobre_kg_chumbo = $lme->lme_cobre_kg_plastico;

            $lme->lme_chumbo_kg_chumbo = ($lme->usd_ton_chumbo / 1000) / $lme->rate_usd_euro;

            $lme->save();

            $lme->custo_mix = $lme->preco_venda_plastico * ($plastico->perc_mix_cabo * 0.01) + ($lme->preco_venda_chumbo * ($chumbo->perc_mix_cabo * 0.01));

            $lme->custo_venda = ($lme->custo_mix - ($tarifa->custo_retirada)) - ($tarifa->custo_operacao);

            $lme->save();

            return redirect('lme-board')->with('status', 'Registo editado com sucesso.');

        }

        $lastLme = DB::table('lmes')
            ->select('id', 'data', 'usd_ton_cobre', 'usd_ton_chumbo', 'rate_usd_euro', 'custo_venda', 'custo_mix')
            ->orderBy('data', 'desc')->first();

        $lme->custo_mix = $lastLme->custo_mix;
        $lme->custo_venda = $lastLme->custo_venda;

        $lme->save();

        return redirect('lme-board')->with('status', 'Registo editado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Lme
     * @return \Illuminate\Http\Lme
     */
    public function destroy(Lme $lme)
    {
        $lme->delete();

        return redirect('lme-board')->with('status', 'Eliminado com sucesso');
    }
}
