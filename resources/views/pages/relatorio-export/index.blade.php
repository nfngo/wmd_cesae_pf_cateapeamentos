@extends('master.main')

@section('content')
    @component('components.relatorio-export.relatorio-export-list', ['dados'=> $dados])
    @endcomponent
@endsection

