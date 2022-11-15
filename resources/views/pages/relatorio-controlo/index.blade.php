@extends('master.main')

@section('content')
    @component('components.relatorio-controlo.relatorio-controlo-list', ['control_apea'=>$control_apea])
    @endcomponent
@endsection
