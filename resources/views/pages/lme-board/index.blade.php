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

        <div class="row mt-5 flex-nowrap overflow-hidden position-relative">
            <button type="button" id="cardSwapBtn" class="btn btn-inverted card-btn-swap">Swap</button>
            <div id="lmeContainer" class="col-12 col-md-6">
                @component('components.lme.lme-list', ['lme' => $lme])
                @endcomponent
            </div>
            <div class="col-12 col-md-6">
                @component('components.lme-material.lme-material-list', ['materiais' => $materiais[0], 'tipo' => 'Plástico'])
                @endcomponent
            </div>
            <div class="col-12 col-md-6">
                @component('components.lme-material.lme-material-list', ['materiais' => $materiais[1], 'tipo' => 'Chumbo'])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
