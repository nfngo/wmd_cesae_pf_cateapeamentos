<?php

namespace App\Http\Controllers;

use App\Apea;
use App\Estado;
use App\RefExterna;
use Illuminate\Http\Request;

class ApeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Apea $apea
     * @return \Illuminate\Http\Response
     */
    public function show(Apea $apea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Apea $apea
     * @return \Illuminate\Http\Response
     */
    public function edit(Apea $apea)
    {

        $estados = Estado::all();

        return view('pages.apeamentos.edit', ['apea' => $apea, 'estados' => $estados]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Apea $apea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apea $apea)
    {
        $apea = Apea::find($apea->id);

        $apea->id = $request->apea_id;
        $apea->estado_nemesis_apea_id = $request->estado_nemesis_apea_id;
        $apea->data_estado_global_apea = $request->data_estado_global_apea;
        $apea->data_envio_proj_sp_apea = $request->data_envio_proj_sp_apea;
        $apea->data_real_p_apea = $request->data_real_p_apea;
        $apea->data_plan_p_apea = $request->data_plan_p_apea;
        $apea->data_real_c_apea = $request->data_real_c_apea;
        $apea->data_plan_c_apea = $request->data_plan_c_apea;
        $apea->data_real_cadastro_apea = $request->data_real_cadastro_apea;
        $apea->data_plan_cadastro_apea = $request->data_plan_cadastro_apea;
        $apea->tipo_cabos = $request->tipo_cabos;
        $apea->peso_cabos = $request->peso_cabos;
        $apea->faturado = $request->faturado;

        $apea->save();

        $message = 'Apeamento ' . $apea->id . ' editado com sucesso.';

        return redirect('estados')->with('status', $message);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Apea $apea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apea $apea)
    {
        //
    }
}
