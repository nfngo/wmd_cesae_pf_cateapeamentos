<div class="w-100 p-4 mt-5">
    <div class="row">
        <div class="col-12">
            <p class="my-4 text-uppercase fs-5">Controlo de Apeamentos</p>

            <div class="card border-0 shadow-lg mt-5">

                @if($control_apea->count() == 0)
                    <p>Não existem dados</p>
                @else
                    <table id="controloApea" class="table">
                        <thead>
                        <tr class="bg-light-blue text-white bt-0">

                            <th scope="col">Codigo Nemesis Apeamento</th>
                            <th scope="col">Material ID</th>
                            <th scope="col">Codigo Centro Lucro</th>
                            <th scope="col">Descrição Centro Lucro</th>
                            <th scope="col">GECA Serviço</th>
                            <th scope="col">GECA Requisição</th>
                            <th scope="col">CCO</th>
                            <th scope="col">Data</th>
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
                                <td>{{ $item->comprimento_proj}}</td>
                                <td>{{ $item->tipo_consumo_proj}}</td>
                                <td>{{ $item->comprimento_real}}</td>
                                <td>{{ $item->tipo_consumo_real}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    @endif
                {{$control_apea->links()}}
            </div>
        </div>
    </div>
</div>
