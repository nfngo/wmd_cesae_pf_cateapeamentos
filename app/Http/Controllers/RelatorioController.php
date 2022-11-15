<?php

namespace App\Http\Controllers;
use App\Exports\RelatoriosExport;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use PhpParser\Node\Expr\AssignOp\Concat;

class RelatorioController extends Controller
{
    public function index()
    {
        $dados = DB::table('controlo_apeas')
            ->join('lmes', 'lmes.id', '=', DB::raw('DATE_FORMAT(controlo_apeas.data, "%m%Y")'))
            ->join('materials', 'materials.id', '=', 'controlo_apeas.material_id')
            ->select('controlo_apeas.apea_id',  'controlo_apeas.data', 'controlo_apeas.material_id',
                DB::raw('CONCAT(materials.bainha, " ", materials.pares," X 2 X 0,", materials.diametro) as descricao'),
                DB::raw('materials.bainha as cabo'),
                DB::raw('materials.diametro as calibre'), 'materials.pares',
                DB::raw('controlo_apeas.comprimento_real - 0 as comp'),
                DB::raw('materials.peso_kg_m * controlo_apeas.comprimento_real as kg'),
                DB::raw('lmes.custo_venda as valor_unit_venda'),
                DB::raw('(materials.peso_kg_m * controlo_apeas.comprimento_real)  * lmes.custo_venda as valor_total_venda'))
            ->paginate(12)
            ->onEachSide(1);



        return view('pages.relatorio-export.index', ['dados'=> $dados]);
    }


    public function export()
    {
        return Excel::download(new RelatoriosExport(), 'relatorios.xlsx');
    }


}
