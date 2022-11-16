<div class="w-100 p-4 mt-5">
    <div class="row">
        <div class="col-12">
            <p class="my-4 text-uppercase fs-5">Controlo de Estados</p>
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form class="form-group my-4" method="GET" action="{{url('estados/search')}}">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label class="mb-1" for="ref_externa">Ref. Externa</label>
                            <input
                                type="text"
                                class="form-control input-custom"
                                id="ref_externa"
                                name="ref_externa"
                                @if(Request::get('ref_externa'))
                                    value="{{ Request::get('ref_externa') }}"
                                @endif
                                placeholder="01CR01AP001001">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label class="mb-1" for="central">Central</label>
                            <input
                                type="text"
                                class="form-control input-custom"
                                id="central"
                                name="central"
                                @if(Request::get('central'))
                                    value="{{ Request::get('central') }}"
                                @endif
                                placeholder="02PT03">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label class="mb-1" for="phase_id">Código Nemesis</label>
                            <input
                                type="text"
                                class="form-control input-custom"
                                id="phase_id"
                                name="phase_id"
                                @if(Request::get('phase_id'))
                                    value="{{ Request::get('phase_id') }}"
                                @endif
                                placeholder="18PJ_BALD_061272 ou 18APEAP_CU066363">
                        </div>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-12 col-md-5">
                        <div class="form-group">
                            <label class="mb-1" for="estado_id">Estado</label>
                            <select
                                class="form-select @error('estado_id') is-invalid @enderror"
                                name="estado_id"
                                id="estado_id"
                            >
                                <option selected value="">Escolha um estado</option>
                                @foreach($estados as $estado)
                                    <option value="{{ $estado->id }}">{{ $estado->descricao }}</option>
                                @endforeach

                            </select>
                            @error('estado_id')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="form-group">
                            <label class="mb-1" for="faturado">Faturado</label>
                            <select
                                class="form-select @error('faturado') is-invalid @enderror"
                                name="faturado"
                                id="faturado"
                            >
                                <option selected value="">Escolha uma opção</option>
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select>
                            @error('faturado')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-2 d-flex align-items-end">
                        <button class="btn btn-filled w-100" type="submit">Procurar</button>
                    </div>
                </div>
            </form>

            <div class="card border-0 shadow-lg mt-5">

                    @if($info->count() == 0)
                        <div class="col-12 m-3">
                            <p class="mb-0">Resultados não encontrados.</p>
                        </div>
                    @else
                    <div class="" style="overflow-x: scroll">
                        <table id="controloEstados" class="table">
                            <thead>
                            <tr class="bg-light-blue text-white bt-0 text-center">
                                <th colspan="5"></th>
                                <th colspan="2">Controlo de Estado</th>
                                <th colspan="3">PdS Global Baldeação</th>
                                <th colspan="1">Data N Baldeação</th>
                                <th colspan="3">Data U: Projeto Baldeação</th>
                                <th colspan="3">Data D: Projeto Baldeação</th>
                                <th colspan="3">Data Y: Projeto Baldeação</th>
                                <th colspan="2">Controlo de Estado</th>
                                <th colspan="3">PdS Global Apeamento</th>
                                <th colspan="1">Data N Apeamento</th>
                                <th colspan="3">Data U: Projeto Apeamento</th>
                                <th colspan="3">Data D: Projeto Apeamento</th>
                                <th colspan="3">Data Y: Projeto Apeamento</th>
                                <th colspan="2">Caracterização Baldeação</th>
                                <th colspan="1"></th>
                            </tr>
                            <tr class="bg-secondary-header text-white">
                                <th scope="col">Ref. Externa</th>
                                <th scope="col">Central</th>
                                <th scope="col">IAN IAS</th>
                                <th scope="col">OCR</th>
                                <th scope="col">SP</th>

                                <th scope="col">Código Nemesis</th>
                                <th scoppe="col"></th>
                                <th scope="col">Estado</th>
                                <th scope="col">Data Estado</th>
                                <th scope="col">Estado Resumo</th>
                                <th scope="col">Data Envio SP Projeto</th>
                                <th scope="col">Data Realização Projeto</th>
                                <th scope="col">Data Planeada</th>
                                <th scope="col">PdS Projeto</th>
                                <th scope="col">Data Realização Construção</th>
                                <th scope="col">Data Planeada</th>
                                <th scope="col">PdS Construção</th>
                                <th scope="col">Data Realização</th>
                                <th scope="col">Data Planeada</th>
                                <th scope="col">PdS Cadastro</th>

                                <th scope="col">Código Nemesis</th>
                                <th scope="col"></th>
                                <th scope="col">Estado</th>
                                <th scope="col">Data Estado</th>
                                <th scope="col">Estado Resumo</th>
                                <th scope="col">Data Envio SP Projeto</th>
                                <th scope="col">Data Realização Projeto</th>
                                <th scope="col">Data Planeada</th>
                                <th scope="col">PdS Projeto</th>
                                <th scope="col">Data Realização Construção</th>
                                <th scope="col">Data Planeada</th>
                                <th scope="col">PdS Construção</th>
                                <th scope="col">Data Realização</th>
                                <th scope="col">Data Planeada</th>
                                <th scope="col">PdS Cadastro</th>
                                <th scope="col">Tipo Cabos (Prim/Sec)</th>
                                <th scope="col">Peso Cabo Apear(Kg)</th>
                                <th scope="col">Faturado</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($info as $project)
                                @php
                                    $pdsBald = "";
                                    $pdsApea = "";
                                @endphp
                                <tr>
                                    <td>{{ $project->id }}</td>
                                    <td>{{ $project->acl_id }}</td>
                                    <td>{{ $project->ian_ias }}</td>
                                    <td>{{ $project->ifr }}</td>
                                    <td>{{ $project->sp_fft }}</td>

                                    <td>
                                        {{ $project->bald_id }}
                                    </td>

                                    <td class="text-center">
                                        @isadmin
                                        @if($project->bald_id)
                                            <a href={{url('bald/' . $project->bald_id . '/edit')}}>
                                                <i class="fa-solid fa-eye fs-5"></i>
                                            </a>
                                        @endif
                                        @endisadmin
                                    </td>

                                    <td>{{ $project->estado_nemesis_bald_id }}</td>
                                    <td>{{ $project->data_estado_global_bald}}</td>
                                    <td>
                                        @foreach($estados as $estado)
                                            @if($estado->id == $project->estado_nemesis_bald_id)
                                                @php
                                                    $pdsBald = $estado->novo_estado;
                                                @endphp
                                                {{ $pdsBald }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @if($project->data_envio_proj_sp_bald != '0000-00-00')
                                            {{ $project->data_envio_proj_sp_bald}}
                                        @endif
                                    </td>
                                    <td>
                                        @if($project->data_real_p_bald != '0000-00-00')
                                            {{ $project->data_real_p_bald}}
                                        @endif
                                    </td>
                                    <td>
                                        @if($project->data_plan_p_bald != '0000-00-00')
                                            {{ $project->data_plan_p_bald}}
                                        @endif
                                    </td>
                                    <td>
                                        @if(in_array($pdsBald, ['Cadastro', 'Em Execução', 'Executado', 'Concluído', 'Cancelado']))
                                            Concluído Proj
                                        @elseif($project->data_plan_p_bald == '0000-00-00')
                                            Sem data Pla
                                        @elseif(\Carbon\Carbon::parse($project->data_plan_p_bald)->gt(now()))
                                            No Prazo
                                        @else
                                            Fora Prazo
                                        @endif
                                    </td>
                                    <td>
                                        @if($project->data_real_c_bald != '0000-00-00')
                                            {{ $project->data_real_c_bald}}
                                        @endif
                                    </td>
                                    <td>
                                        @if($project->data_plan_c_bald != '0000-00-00')
                                            {{ $project->data_plan_c_bald}}
                                        @endif
                                    </td>
                                    <td>
                                        @if(in_array($pdsBald, ['Cadastro', 'Executado', 'Concluído', 'Cancelado']))
                                            Concluído Const
                                        @elseif($project->data_plan_c_bald == '0000-00-00')
                                            Sem data Pla
                                        @elseif(\Carbon\Carbon::parse($project->data_plan_c_bald)->gt(now()))
                                            No Prazo
                                        @else
                                            Fora Prazo
                                        @endif
                                    </td>
                                    <td>
                                        @if($project->data_real_cadastro_bald != '0000-00-00')
                                            {{ $project->data_real_cadastro_bald}}
                                        @endif
                                    </td>
                                    <td>
                                        @if($project->data_plan_cadastro_bald != '0000-00-00')
                                            {{ $project->data_plan_cadastro_bald}}
                                        @endif
                                    </td>
                                    <td>
                                        @if(in_array($pdsBald, ['Concluído', 'Cancelado']))
                                            Concluído
                                        @elseif($project->data_plan_cadastro_bald == '0000-00-00')
                                            Sem data Pla
                                        @elseif(\Carbon\Carbon::parse($project->data_plan_cadastro_bald)->gt(now()))
                                            No Prazo
                                        @else
                                            Fora Prazo
                                        @endif
                                    </td>

                                    <td>{{ $project->apea_id }}</td>
                                    <td class="text-center">
                                        @isadmin
                                        @if($project->apea_id)
                                            <a href={{url('apea/' . $project->apea_id . '/edit')}}>
                                                <i class="fa-solid fa-eye fs-5"></i>
                                            </a>
                                        @endif
                                        @endisadmin
                                    </td>
                                    <td>{{ $project->estado_nemesis_apea_id }}</td>
                                    <td>{{ $project->data_estado_global_apea}}</td>
                                    <td>
                                        @if($project->apea_id == "")
                                            Sem ordem
                                        @else
                                            @foreach($estados as $estado)
                                                @if($estado->id == $project->estado_nemesis_apea_id)
                                                    @php
                                                        $pdsApea = $estado->novo_estado;
                                                    @endphp
                                                    {{ $pdsApea }}
                                                @endif
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        @if($project->data_envio_proj_sp_apea != '0000-00-00')
                                            {{ $project->data_envio_proj_sp_apea}}
                                        @endif
                                    </td>
                                    <td>
                                        @if($project->data_real_p_apea != '0000-00-00')
                                            {{ $project->data_real_p_apea}}
                                        @endif
                                    </td>
                                    <td>
                                        @if($project->data_plan_p_apea != '0000-00-00')
                                            {{ $project->data_plan_p_apea}}
                                        @endif
                                    </td>
                                    <td>
                                        @if($project->apea_id != "")
                                            @if(in_array($pdsApea, ['Cadastro', 'Em Execução', 'Executado', 'Concluído', 'Cancelado']))
                                                Concluído Proj
                                            @elseif($project->data_plan_p_apea == '0000-00-00')
                                                Sem data Pla
                                            @elseif(\Carbon\Carbon::parse($project->data_plan_p_apea)->gt(now()))
                                                No Prazo
                                            @else
                                                Fora Prazo
                                            @endif
                                        @endif
                                    </td>
                                    <td>
                                        @if($project->data_real_c_apea != '0000-00-00')
                                            {{ $project->data_real_c_apea}}
                                        @endif
                                    </td>
                                    <td>
                                        @if($project->data_plan_c_apea != '0000-00-00')
                                            {{ $project->data_plan_c_apea}}
                                        @endif
                                    </td>
                                    <td>
                                        @if($project->apea_id != "")
                                            @if(in_array($pdsApea, ['Cadastro', 'Executado', 'Concluído', 'Cancelado']))
                                                Concluído Const
                                            @elseif($project->data_plan_c_apea == '0000-00-00')
                                                Sem data Pla
                                            @elseif(\Carbon\Carbon::parse($project->data_plan_c_apea)->gt(now()))
                                                No Prazo
                                            @else
                                                Fora Prazo
                                            @endif
                                        @endif
                                    </td>
                                    <td>
                                        @if($project->data_real_cadastro_apea != '0000-00-00')
                                            {{ $project->data_real_cadastro_apea}}
                                        @endif
                                    </td>
                                    <td>
                                        @if($project->data_plan_cadastro_apea != '0000-00-00')
                                            {{ $project->data_plan_cadastro_apea}}
                                        @endif
                                    </td>
                                    <td>
                                        @if($project->apea_id != "")
                                            @if(in_array($pdsApea, ['Concluído', 'Cancelado']))
                                                Concluído
                                            @elseif($project->data_plan_cadastro_apea == '0000-00-00')
                                                Sem data Pla
                                            @elseif(\Carbon\Carbon::parse($project->data_plan_cadastro_apea)->gt(now()))
                                                No Prazo
                                            @else
                                                Fora Prazo
                                            @endif
                                        @endif
                                    </td>
                                    <td>{{ $project->tipo_cabos}}</td>
                                    <td>{{ $project->peso_cabos}}</td>
                                    <td>
                                        @if($project->apea_id != "")
                                            <form method="POST"
                                                  action="{{ route('updateFaturado', $project->apea_id) }}">
                                                @csrf
                                                <input hidden name="id" value="$project->apea_id" />
                                                <button type="submit" id="updateFaturado_{{$project->apea_id}}" class="border-0 bg-transparent" @isadmin @else disabled @endisadmin>
                                                    @if($project->faturado == 1)
                                                        <i class="fs-4 fa-solid fa-circle-check text-success"></i>
                                                    @elseif($project->faturado == 0)
                                                        <i class="fs-4 fa-sharp fa-solid fa-circle-xmark text-danger"></i>
                                                    @endif
                                                </button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
                {{$info->links()}}
            </div>
        </div>
    </div>
</div>
