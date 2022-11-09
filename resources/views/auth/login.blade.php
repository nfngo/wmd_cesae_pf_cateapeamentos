@extends('master.main')

@section('content')
    <div class="login-container d-flex w-100 vh-100 align-items-center justify-content-center bg-blue">
        <div class="login-wrapper">
            <h2 class="text-uppercase text-white fs-4 mb-4">Iniciar Sessão</h2>
            <form method="POST" action="{{ route('login') }}" class="d-flex flex-column">
                @csrf
                <div class="form-floating">
                    <input id="email" type="email" class="form-control login-input @error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email">
                    <label for="email">Email</label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>
                <div class="form-floating">
                    <input id="password" type="password" class="form-control login-input @error('password') is-invalid @enderror"
                           name="password" required autocomplete="current-password" placeholder="password">
                    <label for="password">Password</label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>
                <button type="submit" class="btn-dark-blue fs-6">
                    Iniciar Sessão
                </button>
            </form>
        </div>
    </div>
@endsection
