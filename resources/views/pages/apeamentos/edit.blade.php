@extends('master.main')

@section('content')

    @component('components.apeas.edit', ['apea' => $apea, 'estados' => $estados])
    @endcomponent

@endsection
