<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Sum;
use Symfony\Component\Routing\Matcher\UrlMatcher;

class CustosApeadosController extends Controller
{
    public function index() {
       $custos_apeados = DB::table('controlo_apeas')
           ->join('materials', 'materials.id', '=', 'controlo_apeas.material_id')
           ->join('lmes', 'lmes.id', '=', DB::raw('DATE_FORMAT(controlo_apeas.data, "%m%Y")'))
           ->join('custos', 'custos.apea_id', '=', 'controlo_apeas.apea_id')
           ->select('controlo_apeas.apea_id',
               DB::raw('SUM(controlo_apeas.comprimento_proj) as total_comp_plan'),
               DB::raw('SUM(controlo_apeas.comprimento_proj * materials.peso_kg_m) as total_peso_plan'),
               DB::raw('SUM(controlo_apeas.comprimento_proj * materials.peso_kg_m * lmes.custo_venda) as total_plan_venda'),
               DB::raw('SUM(controlo_apeas.comprimento_proj * materials.cobre) as total_cobre_plan'),
               DB::raw('SUM(controlo_apeas.comprimento_proj * materials.chumbo) as total_chumbo_plan'),
               DB::raw('SUM(controlo_apeas.comprimento_real) as total_comp_real'),
               DB::raw('SUM(controlo_apeas.comprimento_real * materials.peso_kg_m) as total_peso_real'),
               DB::raw('SUM(controlo_apeas.comprimento_real * materials.peso_kg_m * lmes.custo_venda) as total_real_venda'),
               DB::raw('SUM(controlo_apeas.comprimento_real * materials.cobre) as total_cobre_real_final'),
               DB::raw('SUM(controlo_apeas.comprimento_real * materials.chumbo) as total_chumbo_real_final'),
               DB::raw('custos.custo_total_real_final as custo_bald_apea'),
              /*
               DB::raw('((controlo_apeas.comprimento_real * materials.peso_kg_m * lmes.custo_venda) - custos.custo_total_real_final) / (controlo_apeas.comprimento_real * materials.peso_kg_m * lmes.custo_venda) as rentabilidade'),
               DB::raw('(controlo_apeas.comprimento_proj * materials.peso_kg_m * lmes.custo_venda - custos.custo_total_real_final) / (controlo_apeas.comprimento_proj * materials.peso_kg_m * lmes.custo_venda) as rentabilidade_planeada'),*/
               DB::raw('controlo_apeas.data as data_apeamento'),
               DB::raw('lmes.custo_venda as custo_venda'),
               DB::raw('custos.id as custo_id')
           )
           ->groupBy('controlo_apeas.apea_id')
           ->paginate(12);
        return view('pages.custos-apeados.index', ['custos_apeados' =>  $custos_apeados]);

    }

}
