<?php

namespace App\Http\Controllers;

use App\ControloApea;
use Illuminate\Http\Request;

class ControloApeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $control_apea = ControloApea::paginate(12);
        return view('pages.relatorio-controlo.index', ['control_apea' => $control_apea]);
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
     * @param  \App\ControloApea  $controloApea
     * @return \Illuminate\Http\Response
     */
    public function show(ControloApea $controloApea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ControloApea  $controloApea
     * @return \Illuminate\Http\Response
     */
    public function edit(ControloApea $controloApea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ControloApea  $controloApea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ControloApea $controloApea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ControloApea  $controloApea
     * @return \Illuminate\Http\Response
     */
    public function destroy(ControloApea $controloApea)
    {
        //
    }
}
