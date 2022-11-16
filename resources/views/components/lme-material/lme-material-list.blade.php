<div id="{{$tipo}}Container" class="row">
    <div class="col-12">
        <div class="card border-0">
            <div class="row">
                <div class="col-12">
                    <p class="text-color-secondary-header m-3 fs-4 fw-semibold">{{$tipo}}</p>
                </div>
            </div>
            @if($materiais->count() == 0)
                <div class="col-12 m-3">
                    <p class="mb-0">Resultados não encontrados.</p>
                </div>
            @else

                <table class="table">
                    <thead>
                    <tr class="bg-light-blue text-white bt-0">
                        <th class="rounded-0" scope="col">Valor de Venda</th>
                        <th class="rounded-0" scope="col">Valor do metal por Kg de cabo</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($materiais as $item)
                        <tr>
                            <td>
                                @if($item->preco_venda != null)
                                    {{ number_format($item->preco_venda, 2, ',', ' ') }}€
                                @else
                                    -
                                @endif
                            </td>
                            <td>
                                @if($item->preco_metal_kg_cabo != null)
                                {{ number_format($item->preco_metal_kg_cabo, 2, ',', ' ') }}€
                                @else
                                   -
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif

            <div class="hide-links">
                {{$materiais->links()}}
            </div>
        </div>
    </div>
</div>
