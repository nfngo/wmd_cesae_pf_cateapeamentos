@extends('master.main')

@section('content')

    @component('components.balds.edit', ['bald' => $bald, 'estados' => $estados])
    @endcomponent

@endsection
