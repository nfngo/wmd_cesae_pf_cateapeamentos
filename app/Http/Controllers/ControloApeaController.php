<?php

namespace App\Http\Controllers;

use App\Apea;
use App\ControloApea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControloApeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){


        $control_apea = ControloApea::sortable()->paginate(12)->onEachSide(1);

        return view('pages.relatorio-controlo.index', ['control_apea'=>$control_apea]);
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

    public function search(Request $request){

        $apea_id = $request->apea_id;
        $material_id = $request->material_id;
        $data = $request->data;

        $andConditions = array();

        if ($apea_id != "") {
            $andConditions[] = ['controlo_apeas.apea_id', 'like', '%' .$apea_id. '%'];
        }

        if($material_id != ""){
            $andConditions[] = ['controlo_apeas.material_id', 'like', '%' .$material_id. '%'];
        }

        $control_apea = ControloApea::where($andConditions)
            ->whereDate('controlo_apeas.data', 'like', '%' .$data.'%')
            ->sortable()
            ->paginate(12)
            ->onEachSide(1)
            ->appends(['apea_id' => $apea_id, 'data'=>$data, 'material_id'=>$material_id]);

           return view('pages.relatorio-controlo.index', ['control_apea'=>$control_apea]);
    }

}
