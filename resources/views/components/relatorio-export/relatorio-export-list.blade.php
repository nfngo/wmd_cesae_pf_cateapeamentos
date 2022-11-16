<div class="w-100 p-4 mt-5">
    <div class="row">
        <div class="col-12">
            <p class="my-4 text-uppercase fs-5">Relatório Financeiro</p>
            <div class="row justify-content-end">
                <div class="col-12 col-md-2 mt-2 d-flex align-items-end">
                    <a href="{{url('relatorio/export')}}" class="btn btn-filled w-100">
                        <i class="fa-solid fa-download mx-2"></i>
                        Exportar</a>
                </div>
            </div>

            <div class="card border-0 shadow-lg mt-4">
                <div class="" style="overflow-x: scroll">

                    <table id="dadosRelatorio" class="table">
                        <thead>
                        <tr class="bg-light-blue text-white bt-0">

                            <th scope="col">Numero Externo</th>
                            <th scope="col">Data</th>
                            <th scope="col">idMaterial</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Cabo</th>
                            <th scope="col"> Calibre</th>
                            <th scope="col">Pares</th>
                            <th scope="col">Comp(m)</th>
                            <th scope="col">Kg</th>
                            <th scope="col">Valor Unit Venda</th>
                            <th scope="col">Valor Total Venda</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dados as $dado)
                            <tr>
                                <td>{{ $dado->apea_id}}</td>
                                <td>{{ $dado->data}}</td>
                                <td>{{ $dado->material_id }}</td>
                                <td>{{ $dado->descricao}} </td>
                                <td>{{ $dado->cabo}}</td>
                                <td>{{ $dado->calibre}}</td>
                                <td>{{ $dado->pares}}</td>
                                <td>{{ $dado->comp}}</td>
                                <td>{{ $dado->kg}}</td>
                                <td>{{$dado->valor_unit_venda}}€</td>
                                <td>{{number_format($dado->valor_total_venda, 2, ',', ' ')}}€</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$dados->links()}}
                </div>
            </div>
        </div>
    </div>

</div>
