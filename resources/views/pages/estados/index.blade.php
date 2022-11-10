@extends('master.main')

@section('content')
    @component('components.estados.estados-list', ['info' => $info, 'estados' => $estados])
    @endcomponent
@endsection
