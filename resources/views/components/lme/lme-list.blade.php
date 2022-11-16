<div class="row">
    <div class="col-12">
        <div class="card border-0">
            <div class="row position-relative">
                <div class="col-12">
                    <p class="text-color-secondary-header m-3 fs-4 fw-semibold">LME</p>
                </div>
                @isadmin
                <button type="button" class="position-absolute btn btn-filled lme-add-btn" data-bs-toggle="modal"
                        data-bs-target="#createModal">
                    <i class="fa-solid fa-plus"></i>
                </button>
                @endisadmin
            </div>

            @if($lme->count() == 0)
                <div class="col-12 m-3">
                    <p class="mb-0">Resultados não encontrados.</p>
                </div>
            @else
                <div class="mb-3" style="overflow-x: scroll">
                    <table class="table">
                        <thead>
                        <tr class="bg-light-blue text-white bt-0">
                            <th class="rounded-0" scope="col">Mês</th>
                            <th scope="col">USD / Ton Cobre</th>
                            <th scope="col">USD / Ton Chumbo</th>
                            <th scope="col">Exchange rate USD / €</th>
                            <th scope="col">LME Cobre / Kg</th>
                            <th class="rounded-0" scope="col">LME Chumbo / Kg</th>
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
                                <td>
                                    @if($item->usd_ton_cobre != null)
                                        {{ $item->usd_ton_cobre }}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    @if($item->usd_ton_chumbo != null)
                                        {{ $item->usd_ton_chumbo }}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    @if($item->rate_usd_euro != null)
                                        {{ $item->rate_usd_euro }}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    @if($item->lme_cobre_kg != null)
                                        {{ $item->lme_cobre_kg }}€
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    @if($item->lme_chumbo_kg != null)
                                        {{ $item->lme_chumbo_kg }}€
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>{{ $item->custo_mix }}€</td>
                                <td>{{ $item->custo_venda }}€</td>
                                @isadmin
                                <td class="d-none">
                                    <form id="deleteForm" action="{{ url('lme/' . $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                                @endisadmin
                            </tr>
                            @isadmin
                            @if($loop->first && (Request::query('page') == 1 || !isset($_GET['page'])))
                                <button type="button" class="position-absolute btn btn-filled lme-edit-btn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editModal" data-toggle="tooltip" title="Editar último mês"
                                        onclick="populateEditForm({{json_encode($item)}})">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button type="submit" form="deleteForm"
                                        class="position-absolute btn btn-filled lme-delete-btn"
                                        data-toggle="tooltip" title="Eliminar último mês">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            @endif
                            @endisadmin
                        @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
                {{$lme->links()}}
        </div>
    </div>
</div>
