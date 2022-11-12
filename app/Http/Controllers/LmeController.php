<?php

namespace App\Http\Controllers;

use App\Lme;
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
        $lme = Lme::paginate(12);
        return view('pages.lme.index', ['lme' => $lme]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.lme.lme-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'data' => 'required',
            ]);

        Lme::create($request->all());
        return redirect('lme')->with('status','Item created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lme  
     * @return \Illuminate\Http\Response
     */
    public function show(Lme $lme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Material  
     * @return \Illuminate\Http\Response
     */
    public function edit(Lme $lme)
    {
        return view('pages.lme.edit', ['lme' => $lme]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Material  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lme $lme)
    {
        $lme = Lme::find($lme->id);

        $lme->data = $request->data;
        $lme->usd_ton_cobre = $request-> usd_ton_cobre;
        $lme->usd_ton_chumbo = $request->usd_ton_chumbo;
        $lme->rate_usd_euro = $request->rate_usd_euro;
        $lme->preco_venda_plastico = $request->preco_venda_plastico;
        $lme->preco_metal_kg_cabo_plastico = $request->preco_metal_kg_cabo_plastico;
        $lme->lme_cobre_kg_plastico = $request->lme_cobre_kg_plastico;
        $lme->lme_chumbo_kg_plastico = $request->lme_chumbo_kg_plastico;
        $lme->preco_venda_chumbo = $request->preco_venda_chumbo;
        $lme->preco_metal_kg_cabo_chumbo = $request->preco_metal_kg_cabo_chumbo;
        $lme->lme_cobre_kg_chumbo = $request->lme_cobre_kg_chumbo;
        $lme->lme_chumbo_kg_chumbo = $request->lme_chumbo_kg_chumbo;
        $lme->custo_mix = $request->custo_mix;
        $lme->custo_venda = $request->custo_venda;

        $lme->save();

        return redirect('estados')->with('status','Editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lme  
     * @return \Illuminate\Http\Lme
     */
    public function destroy(Lme $lme)
    {
        //
    }
}
