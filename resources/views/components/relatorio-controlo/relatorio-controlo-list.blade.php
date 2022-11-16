<div class="w-100 p-4 mt-5">
    <div class="row">
        <div class="col-12">
            <p class="my-4 text-uppercase fs-5">Controlo de Apeamentos</p>
            <form class="form-group my-4" method="GET" action="{{url('control-apea/search')}}">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label class="mb-1" for="apea_id">Código Nemesis</label>
                            <input
                                type="text"
                                class="form-control input-custom"
                                id="apea_id"
                                name="apea_id"
                                @if(Request::get('apea_id'))
                                    value="{{ Request::get('apea_id') }}"
                                @endif
                                placeholder="18APEAP_CU066363">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label class="mb-1" for="apea_id">Material ID</label>
                            <input
                                type="text"
                                class="form-control input-custom"
                                id="material_id"
                                name="material_id"
                                @if(Request::get('material_id'))
                                    value="{{ Request::get('material_id') }}"
                                @endif
                                placeholder="1700005917">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label class="mb-1" for="data">Data</label>
                            <input
                                type="text"
                                class="form-control input-custom"
                                id="data"
                                name="data"
                                @if(Request::get('data'))
                                    value="{{ Request::get('data') }}"
                                @endif
                                placeholder="aaaa ou mm ou aaaa-mm">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end mt-3">
                    <div class="col-12 col-md-2 d-flex align-items-end">
                        <button class="btn btn-filled w-100" type="submit">Procurar</button>
                    </div>
                </div>
            </form>


            <div class="card border-0 shadow-lg mt-5">
                @if($control_apea->count() == 0)
                    <div class="col-12 m-3">
                        <p class="mb-0">Resultados não encontrados.</p>
                    </div>
                @else
                    <div class="" style="overflow-x: scroll">
                        <table id="controloApea" class="table">
                            <thead>
                            <tr class="bg-light-blue text-white bt-0">

                                <th scope="col">@sortablelink('apea_id', 'Codigo Nemesis Apeamento')</th>
                                <th scope="col">@sortablelink('material_id', 'Material ID')</th>
                                <th scope="col">Codigo Centro Lucro</th>
                                <th scope="col">Descrição Centro Lucro</th>
                                <th scope="col">GECA Serviço</th>
                                <th scope="col">GECA Requisição</th>
                                <th scope="col">CCO</th>
                                <th scope="col">@sortablelink('data', 'Data')</th>
                                <th scope="col">Material Descrição</th>
                                <th scope="col">Comprimento Projecto</th>
                                <th scope="col">Tipo Consumo Projecto</th>
                                <th scope="col">Comprimento Real</th>
                                <th scope="col">Tipo Consumo Real</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($control_apea as $item)
                                <tr>
                                    <td>{{ $item->apea_id }}</td>
                                    <td>{{ $item->material_id }}</td>
                                    <td>{{ $item->cod_centro_lucro }}</td>
                                    <td>{{ $item->desc_centro_lucro}}</td>
                                    <td>{{ $item->geca_servico }}</td>
                                    <td>{{ $item->geca_requisicao}}</td>
                                    <td>{{ $item->cco}}</td>
                                    <td>{{ $item->data}}</td>
                                    <td>{{ $item->material_descricao }}</td>
                                    <td>{{ number_format($item->comprimento_proj, 2, ',', ' ') }}</td>
                                    <td>{{ $item->tipo_consumo_proj}}</td>
                                    <td>{{ number_format($item->comprimento_real, 2, ',', ' ') }}</td>
                                    <td>{{ $item->tipo_consumo_real}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                    {!! $control_apea->appends(\Request::except('page'))->render() !!}
            </div>
        </div>
    </div>

</div>



