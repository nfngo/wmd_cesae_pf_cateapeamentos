<?php

namespace App\Http\Controllers;

use App\Bald;
use App\Estado;
use Illuminate\Http\Request;

class BaldController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bald  $bald
     * @return \Illuminate\Http\Response
     */
    public function show(Bald $bald)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bald  $bald
     * @return \Illuminate\Http\Response
     */
    public function edit(Bald $bald)
    {

        $estados = Estado::all();
        return view('pages.baldeamentos.edit', ['bald' => $bald,'estados' => $estados]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bald  $bald
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bald $bald)
    {
         $bald = Bald::find($bald->id);

             $bald->id =  $request->bald_id;
             $bald->estado_nemesis_bald_id = $request->estado_nemesis_bald_id;
             $bald->data_estado_global_bald = $request->data_estado_global_bald;
             $bald->data_envio_proj_sp_bald = $request-> data_envio_proj_sp_bald;
             $bald->data_real_p_bald = $request->data_real_p_bald;
             $bald->data_plan_p_bald = $request->data_plan_p_bald;
             $bald->data_real_c_bald = $request->data_real_c_bald;
             $bald->data_plan_c_bald = $request->data_plan_c_bald;
             $bald->data_real_cadastro_bald = $request->data_real_cadastro_bald;
             $bald->data_plan_cadastro_bald = $request->data_plan_cadastro_bald;

             $bald->save();

            $message = 'Baldeação ' . $bald->id . ' editada com sucesso.';

            return redirect('estados')->with('status', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bald  $bald
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bald $bald)
    {
        //
    }
}
