<div class="row">
    <div class="col-12">
        <div class="card border-0">
            <div class="row position-relative">
                <div class="col-12">
                    <p class="text-color-secondary-header m-3 fs-4 fw-semibold">LME</p>
                </div>
                <a href="#" class="position-absolute btn btn-filled lme-add-btn"><span>+</span></a>
            </div>
            <div class="mb-3 overflow-hidden">
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
                                <td>
                                    {{\Carbon\Carbon::parse($item->data)->format('M/Y')}}
                                </td>
                                <td>{{ $item->usd_ton_cobre }}</td>
                                <td>{{ $item->usd_ton_chumbo }}</td>
                                <td>{{ $item->rate_usd_euro }}</td>
                                <td>{{ $item->custo_mix }}€</td>
                                <td class="d-flex align-items-center justify-content-between">
                                    {{ $item->custo_venda }}€
                                    @if($loop->first)
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editModal"
                                                onclick="populateEditForm({{json_encode($item)}})">Editar
                                        </button>
                                    @endif
                                </td>
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
