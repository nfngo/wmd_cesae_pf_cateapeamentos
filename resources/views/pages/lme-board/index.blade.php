@extends('master.main')

@section('content')
    <div class="w-100 p-4 mt-5">
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            <div class="col-12 col-md-4">
                @component('components.tarifas.edit', ['tarifa' => $tarifa])
                @endcomponent
            </div>
            @foreach($cabos as $cabo)
                <div class="col-12 col-md-4">
                    @component('components.cabos.edit', ['cabo' => $cabo])
                    @endcomponent
                </div>
            @endforeach
        </div>

        <div class="row mt-5">
            <div id="lmeContainer" class="col-12 col-lg-6">
                @component('components.lme.lme-list', ['lme' => $lme])
                @endcomponent
            </div>
            <div class="col-12 col-lg-6 mt-3 mt-lg-0">
                <div class="row flex-nowrap overflow-hidden position-relative">
                    <button type="button" id="cardSwapBtn" class="btn btn-inverted card-btn-swap">Swap</button>
                    <div class="col-12">
                        @component('components.lme-material.lme-material-list', ['materiais' => $materiais[0], 'tipo' => 'Plástico'])
                        @endcomponent
                    </div>
                    <div class="col-12">
                        @component('components.lme-material.lme-material-list', ['materiais' => $materiais[1], 'tipo' => 'Chumbo'])
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editModalLabel">Editar</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="editForm" class="card-form" action="" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-2">
                                <label class="fw-semibold mb-1" for="usd_ton_cobre">USD/Ton Cobre</label>
                                <input type="number"
                                       id="usd_ton_cobre"
                                       name="usd_ton_cobre"
                                       value=""
                                       placeholder="Preço da tonelada de cobre"
                                       class="form-control input-custom"
                                       min="0"
                                       step="0.01">
                            </div>
                            <div class="form-group mb-2">
                                <label class="fw-semibold mb-1" for="usd_ton_chumbo">USD/Ton Chumbo</label>
                                <input type="number"
                                       id="usd_ton_chumbo"
                                       name="usd_ton_chumbo"
                                       value=""
                                       placeholder="Preço da tonelada de chumbo"
                                       class="form-control input-custom"
                                       min="0"
                                       step="0.01">
                            </div>
                            <div class="form-group mb-2">
                                <label class="fw-semibold mb-1" for="rate_usd_euro">Exchange rate USD/€</label>
                                <input type="number"
                                       id="rate_usd_euro"
                                       name="rate_usd_euro"
                                       value=""
                                       placeholder="Exchange rate USD/€"
                                       class="form-control input-custom"
                                       min="0"
                                       step="0.01">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="mt-3 mx-3 btn btn-sm btn-inverted" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" from="editForm" class="mt-3 btn btn-sm btn-filled">Gravar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
