@extends('master.main')

@section('content')
    @component('components.custos-apeados.custos-apeados-list', ['custos_apeados' =>  $custos_apeados])
    @endcomponent
@endsection
