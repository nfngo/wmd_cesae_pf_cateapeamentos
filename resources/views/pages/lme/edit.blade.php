@extends('master.main')

@section('content')
    @component('components.lme.lme-edit', ['lme' => $lme])
    @endcomponent
@endsection