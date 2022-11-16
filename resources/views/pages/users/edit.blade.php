@extends('master.main')

@section('content')
    @component('components.users.users-edit', ['user' => $user])
    @endcomponent
@endsection