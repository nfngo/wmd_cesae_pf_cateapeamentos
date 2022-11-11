@extends('master.main')

@section('content')
    @component('components.tarifas.edit', ['tarifa' => $tarifa])
    @endcomponent
@endsection