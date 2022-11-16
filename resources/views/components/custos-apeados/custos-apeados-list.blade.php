<div class="w-100 p-4 mt-5">
    <div class="row">
        <div class="col-12">
            <p class="my-4 text-uppercase fs-5">Custos de Apeamentos</p>

            <div class="card border-0 shadow-lg mt-5">
                <div class="" style="overflow-x: scroll">
                    <table id="custosApeados" class="table">
                        <thead>
                        <tr class="bg-light-blue text-white bt-0 text-center">
                            <th colspan="1"></th>
                            <th colspan="5">Planeado</th>
                            <th colspan="9">Realizado</th>
                            <th colspan="3"></th>
                        </tr>
                        <tr class="bg-secondary-header text-white">
                            <th scope="col">Designação</th>
                            <th scope="col">Pla(m)</th>
                            <th scope="col">Pla(Kg)</th>
                            <th scope="col">Pla Venda</th>
                            <th scope="col">Cobre(Kg)</th>
                            <th scope="col">Chumbo(Kg)</th>
                            <th scope="col">Real(m)</th>
                            <th scope="col">Real(Kg)</th>
                            <th scope="col">Real Venda</th>
                            <th scope="col">Cobre(Kg)</th>
                            <th scope="col">Chumbo(Kg)</th>
                            <th scope="col">Custos BALDEIA + APEIA</th>
                            <th scope="col">Proveitos Liquidos</th>
                            <th scope="col">Rentabilidade</th>
                            <th scope="col">Rentabilidade planeada</th>
                            <th scope="col">Data "D" Apeamento</th>
                            <th scope="col">Custo Venda</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $custos_apeados as $item)
                            <tr>
                                <td>{{  $item->custo_id}}</td>
                                <td>{{  number_format($item-> total_comp_plan, 1, ',', ' ')}}</td>
                                <td>{{  number_format($item-> total_peso_plan, 1, ',', ' ')}}</td>
                                <td>{{  number_format($item-> total_plan_venda, 1, ',', ' ')}}€</td>
                                <td>{{  number_format($item-> total_cobre_plan, 1, ',', ' ')}}</td>
                                <td>{{  number_format($item-> total_chumbo_plan, 1, ',', ' ')}}</td>
                                <td>{{ number_format($item-> total_comp_real, 1, ',', ' ') }}</td>
                                <td>{{ number_format($item-> total_peso_real, 1, ',', ' ') }}</td>
                                <td>{{ number_format( $item-> total_real_venda, 1, ',', ' ')}}€</td>
                                <td>{{ number_format($item-> total_cobre_real_final, 1, ',', ' ')}}</td>
                                <td>{{ number_format( $item-> total_chumbo_real_final, 1, ',', ' ')}}</td>
                                <td>{{ number_format( $item-> custo_bald_apea , 1, ',', ' ') }}€</td>
                                <td>{{ number_format( $item-> total_real_venda - $item->custo_bald_apea,  1, ',', ' ') }}
                                    €
                                </td>
                                <td>{{ number_format((($item-> total_real_venda - $item->custo_bald_apea)) * 100/ $item->total_real_venda,  1, ',', ' ')}}
                                    %
                                </td>
                                <td>{{ number_format((($item-> total_plan_venda - $item->custo_bald_apea) * 100 / $item-> total_plan_venda), 1, ',', ' ' ) }}
                                    %
                                </td>
                                <td>{{ $item-> data_apeamento}}</td>
                                <td>{{ number_format($item-> custo_venda, 2, ',', ' ') }}€</td>

                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $custos_apeados->links()}}
            </div>
        </div>
    </div>
</div>






