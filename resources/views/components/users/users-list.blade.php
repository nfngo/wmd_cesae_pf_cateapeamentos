<div class="w-100 p-4 mt-5">
    @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Erro ao criar utilizador.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card border-0">
                <div class="row position-relative">
                    <div class="col-12">
                        <p class="text-color-secondary-header m-3 fs-4 fw-semibold">Utilizadores</p>
                    </div>
                    {{--                @isadmin--}}
                    <button type="button" class="position-absolute btn btn-filled lme-add-btn" data-bs-toggle="modal"
                            data-bs-target="#userCreateModal">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                    {{--                @endisadmin--}}
                </div>

                @if($users->count() == 0)
                    <div class="col-12 m-3">
                        <p class="mb-0">Resultados não encontrados.</p>
                    </div>
                @else
                    <table class="table fs-5">
                        <thead>
                        <tr class="bg-light-blue text-white bt-0">
                            <th class="rounded-0" scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Imagem</th>
                            <th scope="col">Role</th>
                            <th class="rounded-0" scope="col">Acções</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @if($user->image != "")
                                        <div
                                            class="user-list-img d-flex justify-content-center align-items-center rounded-circle bg-light-blue"
                                            style="background: url('{{asset('storage/' . Auth::user()->image) }}'); background-size: cover; background-position: center;">
                                        </div>
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    <form method="POST"
                                          action="{{ route('updateRole', $user->id) }}">
                                        @csrf
                                        <input hidden name="id" value="{{$user->id}}"/>
                                        <button type="submit" id="updateUserRole_{{$user->id}}"
                                                class="border-0 bg-transparent" @isadmin @else disabled @endisadmin>
                                            @if($user->is_admin == 1)
                                                <i class="fa-solid fa-user-secret"></i>
                                            @else
                                                <i class="fa-solid fa-user"></i>
                                            @endif
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <button form="userDelete" type="submit"
                                            class="btn btn-filled user-delete-btn">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
        <form id="userDelete" action="{{ url('users/' . $user->id) }}" method="POST">
            @csrf
            @method('DELETE')
        </form>
    </div>
    @isadmin
    <div class="modal fade" id="userCreateModal" tabindex="-1" aria-labelledby="userCreateModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="userCreateModalLabel">Criar Utilizador</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="createUserForm" class="card-form" action="{{ url('users') }}" method="POST">
                        @csrf
                        <div class="form-group mb-2">
                            <label class="fw-semibold mb-1" for="name">Nome</label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                class="form-control input-custom
                                    @error('name') is-invalid @enderror"
                                value="{{old('name')}}"
                                placeholder="Nome"
                                autocomplete="name"
                                required>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label class="fw-semibold mb-1" for="email">Email</label>
                            <input type="email"
                                   id="email"
                                   name="email"
                                   value="{{ old('email') }}"
                                   placeholder="exemplo@exemplo.net"
                                   class="form-control input-custom @error('email') is-invalid @enderror"
                                   autocomplete="email"
                                   required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label class="fw-semibold mb-1 w-100" for="password">Password</label>
                            <small class="form-text text-muted">Deve ter, pelo menos, 8 caracteres.</small>
                            <input id="password" type="password"
                                   class="form-control input-custom @error('password') is-invalid @enderror"
                                   placeholder="Introduza uma password"
                                   name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label class="fw-semibold mb-1" for="password-confirm">Confirmar password</label>
                            <input id="password-confirm" type="password" class="form-control input-custom"
                                   placeholder="Confirme a password"
                                   name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="mt-3 mx-3 btn btn-sm btn-inverted" data-bs-dismiss="modal">
                        Cancelar
                    </button>
                    <button type="submit" form="createUserForm" class="mt-3 btn btn-sm btn-filled">Gravar</button>
                </div>
            </div>
        </div>
    </div>
    @endisadmin
</div>


