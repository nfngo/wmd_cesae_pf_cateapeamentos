<div class="w-100 p-3 mt-5">
    <div class="row">
        <div class="col-12">
            <h1>LME</h1>
            <div class="mb-3" style="overflow-x: scroll">
                @if($lme->count() == 0)
                    <p>Não existem dados</p>
                @else
                    <table class="table table-striped table-bordered" style="font-size: 0.75rem">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Data</th>
                            <th scope="col">usd_ton_cobre</th>
                            <th scope="col">usd_ton_chumbo</th>
                            <th scope="col">rate_usd_euro</th>
{{--                            <th scope="col">preco_venda_plastico</th>--}}
{{--                            <th scope="col">preco_metal_kg_cabo_plastico</th>--}}
{{--                            <th scope="col">lme_cobre_kg_plastico</th>--}}
{{--                            <th scope="col">lme_chumbo_kg_plastico</th>--}}
{{--                            <th scope="col">preco_venda_chumbo</th>--}}
{{--                            <th scope="col">preco_metal_kg_cabo_chumbo</th>--}}
{{--                            <th scope="col">lme_cobre_kg_chumbo</th>--}}
{{--                            <th scope="col">lme_chumbo_kg_chumbo</th>--}}
                            <th scope="col">custo_mix</th>
                            <th scope="col">custo_venda</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($lme as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->data }}</td>
                                <td>{{ $item->usd_ton_cobre }}</td>
                                <td>{{ $item->usd_ton_chumbo }}</td>
                                <td>{{ $item->rate_usd_euro }}</td>
{{--                                <td>{{ $item->preco_venda_plastico }}</td>--}}
{{--                                <td>{{ $item->preco_metal_kg_cabo_plastico }}</td>--}}
{{--                                <td>{{ $item->lme_cobre_kg_plastico }}</td>--}}
{{--                                <td>{{ $item->lme_chumbo_kg_plastico }}</td>--}}
{{--                                <td>{{ $item->preco_venda_chumbo }}</td>--}}
{{--                                <td>{{ $item->preco_metal_kg_cabo_chumbo }}</td>--}}
{{--                                <td>{{ $item->lme_cobre_kg_chumbo }}</td>--}}
{{--                                <td>{{ $item->lme_chumbo_kg_chumbo }}</td>--}}
                                <td>{{ $item->custo_mix }}</td>
                                <td>{{ $item->custo_venda }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
            {{$lme->links()}}
        </div>
    </div>
</div>
