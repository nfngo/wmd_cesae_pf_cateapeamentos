@extends('master.main')

@section('content')
    @component('components.tarifas.edit', ['tarifa' => $tarifa])
    @endcomponent
    @foreach($cabos as $cabo)
        @component('components.cabos.edit', ['cabo' => $cabo])
        @endcomponent
    @endforeach
    @component('components.lme.lme-list', ['lme' => $lme])
    @endcomponent

    @component('components.lme-material.lme-material-list', ['materiais' => $materiais[0]])
    @endcomponent

    @component('components.lme-material.lme-material-list', ['materiais' => $materiais[1]])
    @endcomponent
@endsection
