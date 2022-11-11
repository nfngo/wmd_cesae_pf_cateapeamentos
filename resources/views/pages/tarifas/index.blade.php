@extends('master.main')

@section('content')
    @component('components.tarifas.tarifas-list', ['tarifa' => $tarifa])
    @endcomponent
@endsection