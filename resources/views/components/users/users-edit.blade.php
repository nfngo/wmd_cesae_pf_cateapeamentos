<div class="w-100 p-4 mt-5">
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card border-0">
                <div class="col-12 bg-secondary-header user-name-wrapper">
                    <p class="text-white m-3 fs-4 fw-semibold">Olá {{$user->name}}</p>
                </div>
                <div class="col-12 d-flex flex-column flex-sm-row">
                    <div class="col-12 col-sm-4 p-3 d-flex align-items-center justify-content-center">
                        <div class="user-profile-img d-flex justify-content-center align-items-center rounded-circle bg-light-blue"
                             @if($user->image)
                             style="background: url('{{asset('storage/' . $user->image)}}'); background-size: cover; background-position: center"
                            @endif>
                            @if(!$user->image)
                                <i class="fa-solid fa-user"></i>
                            @endif
                        </div>
                    </div>
                        <form class="col-12 col-sm-8 p-3" action="{{url('users/'.$user->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                                <div class="form-group mb-2">
                                    <label class="fw-semibold mb-2 text-uppercase" for="name">Nome</label>
                                    <input type="text"
                                           id="name"
                                           name="name"
                                           value="{{$user->name}}"
                                           placeholder="Insira a name"
                                           class="form-control input-custom"
                                           required>
                                </div>
                                <div class="form-group mb-2">
                                    <label class="fw-semibold mb-2 text-uppercase" for="email">Email</label>
                                    <input type="text"
                                           id="email"
                                           name="email"
                                           value="{{$user->email}}"
                                           autocomplete="email"
                                           placeholder="Insira o email"
                                           class="form-control input-custom"
                                           required>
                                </div>
                                <div class="form-group mb-2 position-relative">
                                    <label class="fw-semibold mb-2 text-uppercase" for="password">Password</label>
                                    <input type="password"
                                           id="password"
                                           name="password"
                                           value=""
                                           autocomplete="password"
                                           placeholder="Insira o password"
                                           class="form-control input-custom"
                                           required>
                                    <i id="show-password" class="fa-solid fa-eye"></i>
                                </div>
                                <div class="form-group mb-2">
                                    <label class="fw-semibold mb-2 text-uppercase" for="image">Imagem de perfil</label>
                                    <input type="file"
                                           id="image"
                                           name="image"
                                           value="{{$user->image}}"
                                           autocomplete="image"
                                           placeholder="Insira o image"
                                           class="form-control input-custom">
                                </div>

                            <button type="submit" class="mt-2 mb-5 btn btn-filled">Gravar</button>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
