@extends('master.main')

@section('content')
    @component('components.cabos.edit', ['cabo' => $cabo])
    @endcomponent
@endsection