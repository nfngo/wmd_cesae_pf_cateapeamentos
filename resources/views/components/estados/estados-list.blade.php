<div class="w-100 p-3 mt-5">
    <div class="row">
        <div class="col-12">
            <h1>Projectos</h1>

            <form class="form-group" method="GET" action="{{url('estados/search')}}">
                <div class="form-group">
                    <label for="central">Central</label>
                    <input
                        type="text"
                        class="form-control"
                        id="central"
                        name="central"
                        @if(Request::get('central'))
                            value="{{ Request::get('central') }}"
                        @endif
                        placeholder="02PT03">
                </div>
                <div class="form-group">
                    <label for="phase_id">Procurar por ID Bald ou ID Apea</label>
                    <input
                        type="text"
                        class="form-control"
                        id="phase_id"
                        name="phase_id"
                        @if(Request::get('phase_id'))
                            value="{{ Request::get('phase_id') }}"
                        @endif
                        placeholder="18PJ_BALD_061272 ou 18APEAP_CU066363">
                </div>
                <div class="form-group">
                    <label for="estado_id">Estado</label>
                    <select
                        class="form-control @error('estado_id') is-invalid @enderror"
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
                <button class="btn btn-primary" type="submit">Procurar</button>
            </form>
            <div class="mb-3" style="overflow-x: scroll">
                @if($info->count() == 0)
                    <p>Não existem dados</p>
                @else
                    <table class="table table-striped table-bordered" style="font-size: 0.75rem">
                        <thead>
                        <tr>
                            <th scope="col">Ref. Externa</th>
                            <th scope="col">Central</th>
                            <th scope="col">IAN IAS</th>
                            <th scope="col">OCR</th>
                            <th scope="col">SP</th>

                            <th scope="col">Código Nemesis</th>
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

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($info as $refExterna)
                            @php
                                $pdsBald = "";
                                $pdsApea = "";
                            @endphp
                            <tr>
                                <td>{{ $refExterna->id }}</td>
                                <td>{{ $refExterna->acl_id }}</td>
                                <td>{{ $refExterna->ian_ias }}</td>
                                <td>{{ $refExterna->ifr }}</td>
                                <td>{{ $refExterna->sp_fft }}</td>

                                <td>{{ $refExterna->bald_id }}</td>
                                <td>{{ $refExterna->estado_nemesis_bald_id }}</td>
                                <td>{{ $refExterna->data_estado_global_bald}}</td>
                                <td>
                                    @foreach($estados as $estado)
                                        @if($estado->id == $refExterna->estado_nemesis_bald_id)
                                            @php
                                                $pdsBald = $estado->novo_estado;
                                            @endphp
                                            {{ $pdsBald }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @if($refExterna->data_envio_proj_sp_bald != '0000-00-00')
                                        {{ $refExterna->data_envio_proj_sp_bald}}
                                    @endif
                                </td>
                                <td>
                                    @if($refExterna->data_real_p_bald != '0000-00-00')
                                        {{ $refExterna->data_real_p_bald}}
                                    @endif
                                </td>
                                <td>
                                    @if($refExterna->data_plan_p_bald != '0000-00-00')
                                        {{ $refExterna->data_plan_p_bald}}
                                    @endif
                                </td>
                                <td>
                                    @if(in_array($pdsBald, ['Cadastro', 'Em Execução', 'Executado', 'Concluído', 'Cancelado']))
                                        Concluído Proj
                                    @elseif($refExterna->data_plan_p_bald == '0000-00-00')
                                        Sem data Pla
                                    @elseif(\Carbon\Carbon::parse($refExterna->data_plan_p_bald)->gt(now()))
                                        No Prazo
                                    @else
                                        Fora Prazo
                                    @endif
                                </td>
                                <td>
                                    @if($refExterna->data_real_c_bald != '0000-00-00')
                                        {{ $refExterna->data_real_c_bald}}
                                    @endif
                                </td>
                                <td>
                                    @if($refExterna->data_plan_c_bald != '0000-00-00')
                                        {{ $refExterna->data_plan_c_bald}}
                                    @endif
                                </td>
                                <td>
                                    @if(in_array($pdsBald, ['Cadastro', 'Executado', 'Concluído', 'Cancelado']))
                                        Concluído Const
                                    @elseif($refExterna->data_plan_c_bald == '0000-00-00')
                                        Sem data Pla
                                    @elseif(\Carbon\Carbon::parse($refExterna->data_plan_c_bald)->gt(now()))
                                        No Prazo
                                    @else
                                        Fora Prazo
                                    @endif
                                </td>
                                <td>
                                    @if($refExterna->data_real_cadastro_bald != '0000-00-00')
                                        {{ $refExterna->data_real_cadastro_bald}}
                                    @endif
                                </td>
                                <td>
                                    @if($refExterna->data_plan_cadastro_bald != '0000-00-00')
                                        {{ $refExterna->data_plan_cadastro_bald}}
                                    @endif
                                </td>
                                <td>
                                    @if(in_array($pdsBald, ['Concluído', 'Cancelado']))
                                        Concluído
                                    @elseif($refExterna->data_plan_cadastro_bald == '0000-00-00')
                                        Sem data Pla
                                    @elseif(\Carbon\Carbon::parse($refExterna->data_plan_cadastro_bald)->gt(now()))
                                        No Prazo
                                    @else
                                        Fora Prazo
                                    @endif
                                </td>

                                <td>{{ $refExterna->apea_id }}</td>
                                <td>{{ $refExterna->estado_nemesis_apea_id }}</td>
                                <td>{{ $refExterna->data_estado_global_apea}}</td>
                                <td>
                                    @if($refExterna->apea_id == "")
                                        Sem ordem
                                    @else
                                        @foreach($estados as $estado)
                                            @if($estado->id == $refExterna->estado_nemesis_apea_id)
                                                @php
                                                    $pdsApea = $estado->novo_estado;
                                                @endphp
                                                {{ $pdsApea }}
                                            @endif
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    @if($refExterna->data_envio_proj_sp_apea != '0000-00-00')
                                        {{ $refExterna->data_envio_proj_sp_apea}}
                                    @endif
                                </td>
                                <td>
                                    @if($refExterna->data_real_p_apea != '0000-00-00')
                                        {{ $refExterna->data_real_p_apea}}
                                    @endif
                                </td>
                                <td>
                                    @if($refExterna->data_plan_p_apea != '0000-00-00')
                                        {{ $refExterna->data_plan_p_apea}}
                                    @endif
                                </td>
                                <td>
                                    @if($refExterna->apea_id == "")
                                    @else
                                        @if(in_array($pdsApea, ['Cadastro', 'Em Execução', 'Executado', 'Concluído', 'Cancelado']))
                                            Concluído Proj
                                        @elseif($refExterna->data_plan_p_apea == '0000-00-00')
                                            Sem data Pla
                                        @elseif(\Carbon\Carbon::parse($refExterna->data_plan_p_apea)->gt(now()))
                                            No Prazo
                                        @else
                                            Fora Prazo
                                        @endif
                                    @endif
                                </td>
                                <td>
                                    @if($refExterna->data_real_c_apea != '0000-00-00')
                                        {{ $refExterna->data_real_c_apea}}
                                    @endif
                                </td>
                                <td>
                                    @if($refExterna->data_plan_c_apea != '0000-00-00')
                                        {{ $refExterna->data_plan_c_apea}}
                                    @endif
                                </td>
                                <td>
                                    @if($refExterna->apea_id == "")
                                    @else
                                        @if(in_array($pdsApea, ['Cadastro', 'Executado', 'Concluído', 'Cancelado']))
                                            Concluído Const
                                        @elseif($refExterna->data_plan_c_apea == '0000-00-00')
                                            Sem data Pla
                                        @elseif(\Carbon\Carbon::parse($refExterna->data_plan_c_apea)->gt(now()))
                                            No Prazo
                                        @else
                                            Fora Prazo
                                        @endif
                                    @endif
                                </td>
                                <td>
                                    @if($refExterna->data_real_cadastro_apea != '0000-00-00')
                                        {{ $refExterna->data_real_cadastro_apea}}
                                    @endif
                                </td>
                                <td>
                                    @if($refExterna->data_plan_cadastro_apea != '0000-00-00')
                                        {{ $refExterna->data_plan_cadastro_apea}}
                                    @endif
                                </td>
                                <td>
                                    @if($refExterna->apea_id == "")
                                    @else
                                        @if(in_array($pdsApea, ['Concluído', 'Cancelado']))
                                            Concluído
                                        @elseif($refExterna->data_plan_cadastro_apea == '0000-00-00')
                                            Sem data Pla
                                        @elseif(\Carbon\Carbon::parse($refExterna->data_plan_cadastro_apea)->gt(now()))
                                            No Prazo
                                        @else
                                            Fora Prazo
                                        @endif
                                    @endif
                                </td>
                                <td>{{ $refExterna->tipo_cabos}}</td>
                                <td>{{ $refExterna->peso_cabos}}</td>
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
