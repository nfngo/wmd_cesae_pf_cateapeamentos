<div class="row">
    <div class="col-12">
        <div class="card border-0">
            <div class="row">
                <div class="col-12 col-sm-3">
                    <p class="text-color-secondary-header m-3 fs-4 fw-semibold">LME</p>
                </div>
                <div class="col-12 col-sm-9 d-flex justify-content-end">
                    <a href="#" class="m-3 btn btn-filled"><span>+</span></a>
                </div>
            </div>
            <div class="mb-3" style="overflow-x: scroll">
                @if($lme->count() == 0)
                    <p>Não existem dados</p>
                @else
                    <table class="table">
                        <thead>
                        <tr class="bg-light-blue text-white bt-0">
{{--                            <th class="rounded-0" scope="col">Id</th>--}}
                            <th class="rounded-0" scope="col">Mês</th>
                            <th scope="col">USD/Ton Cobre</th>
                            <th scope="col">USD/Ton Chumbo</th>
                            <th scope="col">Exchange rate USD/€</th>
                            <th scope="col">Custo MIX</th>
                            <th class="rounded-0" scope="col">Custo de Venda</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($lme as $item)
                            <tr>
{{--                                <td>{{ $item->id }}</td>--}}
                                <td>
                                    {{\Carbon\Carbon::parse($item->data)->format('M/Y')}}
                                </td>
                                <td>{{ $item->usd_ton_cobre }}</td>
                                <td>{{ $item->usd_ton_chumbo }}</td>
                                <td>{{ $item->rate_usd_euro }}</td>
                                <td>{{ $item->custo_mix }}€</td>
                                <td>{{ $item->custo_venda }}€</td>
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
