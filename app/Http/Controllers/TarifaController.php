<?php

namespace App\Http\Controllers;
use App\Tarifa;

use Illuminate\Http\Request;

class TarifaController extends Controller
{
            /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $tarifa = Tarifa::find(1);
//        return view('pages.tarifas.index', ['tarifa' => $tarifa]);
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
    public function show(Tarifa $tarifa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Material
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarifa $tarifa)
    {
        //return view('pages.tarifas.edit', ['tarifa' => $tarifa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarifa $tarifa)
    {
        $tarifa = Tarifa::find($tarifa->id);

        $tarifa->custo_retirada = $request->custo_retirada;
        $tarifa->custo_operacao = $request->custo_operacao;

        $tarifa->save();

        return redirect('lme-board')->with('status','Tarifa editada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lme
     * @return \Illuminate\Http\Lme
     */
    public function destroy(Tarifa $tarifa)
    {
        //
    }
}
