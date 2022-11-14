<div id="{{$tipo}}Container" class="row">
    <div class="col-12">
        <div class="card border-0">
            <div class="row">
                <div class="col-12">
                    <p class="text-color-secondary-header m-3 fs-4 fw-semibold">{{$tipo}}</p>
                </div>
            </div>
            <div class="mb-3" style="overflow-x: scroll">
                @if($materiais->count() == 0)
                    <p>Não existem dados</p>
                @else
                    <table class="table">
                        <thead>
                        <tr class="bg-light-blue text-white bt-0">
                            <th class="rounded-0" scope="col">Valor de Venda</th>
                            <th scope="col">Valor do metal por Kg de cabo</th>
                            <th scope="col">LME Cobre / Kg</th>
                            <th class="rounded-0" scope="col">LME Chumbo / Kg</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($materiais as $item)
                            <tr>
                                <td>{{ $item->preco_venda }}€</td>
                                <td>{{ $item->preco_metal_kg_cabo }}€</td>
                                <td>{{ $item->lme_cobre_kg }}€</td>
                                <td>{{ $item->lme_chumbo_kg }}€</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
            <div class="hide-links">
                {{$materiais->links()}}
            </div>
        </div>
    </div>
</div>
