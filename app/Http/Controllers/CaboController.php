<?php

namespace App\Http\Controllers;
use App\Cabo;

use Illuminate\Http\Request;

class CaboController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cabo = Cabo::all();
        return view('pages.cabos.index', ['cabo' => $cabo]);
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lme
     * @return \Illuminate\Http\Response
     */
    public function show(Cabo $cabo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Material
     * @return \Illuminate\Http\Response
     */
    public function edit(Cabo $cabo)
    {
        return view('pages.cabos.edit', ['cabo' => $cabo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cabo $cabo)
    {
        $cabo = Cabo::find($cabo->id);

        $cabo->perc_mix_cabo = $request->perc_mix_cabo;
        $cabo->perc_lme_cobre = $request->perc_lme_cobre;
        $cabo->perc_lme_chumbo = $request->perc_lme_chumbo;
        $cabo->perc_peso_cobre = $request->perc_peso_cobre;
        $cabo->perc_peso_chumbo = $request->perc_peso_chumbo;

        $cabo->save();

        return redirect('lme-board')->with('status','Cabo de ' . $cabo->material . ' editado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lme
     * @return \Illuminate\Http\Lme
     */
    public function destroy(Cabo $cabo)
    {
        //
    }
}
