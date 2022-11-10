@extends('master.main')

@section('content')
    @component('components.lme.lme-list', ['lme' => $lme])
    @endcomponent
@endsection