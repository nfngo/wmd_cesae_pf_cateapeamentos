<?php

namespace App\Http\Controllers;

use App\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstadosController extends Controller
{
    public function index() {
        $info = DB::table('ref_externas')
            ->join('acls', 'ref_externas.acl_id', '=', 'acls.id')
            ->join('balds', 'ref_externas.id', '=', 'balds.ref_externa_id')
            ->leftJoin('apeas', 'ref_externas.id', '=', 'apeas.ref_externa_id')
            ->select('ref_externas.id', 'ref_externas.acl_id', 'acls.ian_ias', 'acls.ifr', 'acls.sp_fft',
                'balds.id', 'balds.estado_nemesis_bald_id', 'balds.data_estado_global_bald', 'balds.data_envio_proj_sp_bald', 'balds.data_real_p_bald', 'balds.data_plan_p_bald', 'balds.data_real_c_bald',
                'balds.data_plan_c_bald', 'balds.data_real_cadastro_bald', 'balds.data_plan_cadastro_bald', 'apeas.apea_id',
                'apeas.estado_nemesis_apea_id', 'apeas.data_estado_global_apea', 'apeas.data_envio_proj_sp_apea', 'apeas.data_real_p_apea', 'apeas.data_plan_p_apea', 'apeas.data_real_c_apea',
                'apeas.data_plan_c_apea', 'apeas.data_real_cadastro_apea', 'apeas.data_plan_cadastro_apea', 'apeas.tipo_cabos', 'apeas.peso_cabos', 'apeas.faturado')
            ->paginate(12);

        $estados = Estado::all();
        return view('pages.estados.index', ['info' => $info, 'estados' => $estados]);
    }
}
