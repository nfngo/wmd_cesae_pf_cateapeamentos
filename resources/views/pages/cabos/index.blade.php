@extends('master.main')

@section('content')
    @component('components.cabos.cabos-list', ['cabo' => $cabo])
    @endcomponent
@endsection