<nav class="d-flex justify-content-between align-items-center fixed-top bg-dark-blue shadow-sm fs-5">
    <div class="d-flex align-items-center">
        <div class="offcanvas-btn text-white" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
             aria-controls="offcanvasScrolling">
            <i class="fa-solid fa-bars"></i>
        </div>
        <a class="fw-bold mx-5 text-uppercase navbar-brand" href="{{url('/estados')}}">CatApeamentos</a>
    </div>
    <ul class="list-group list-group-horizontal">
        <li class="">
            <a href="{{ url('users/'. Auth::user()->id .'/edit') }}">
                <i class="fa-solid fa-gear"></i>
                <span class="text-uppercase mx-2">Conta</span>
            </a>
        </li>
        <li>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                <i class="fa-solid fa-power-off"></i>
                <span class="text-uppercase mx-2">Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
    <div class="offcanvas offcanvas-start shadow-sm bg-dark-blue" data-bs-scroll="true" data-bs-backdrop="false"
         tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel"></h5>
        </div>
        <div class="offcanvas-body d-flex flex-column p-0 py-3">
            <div class="user-info-container mb-3">
                <div class="d-flex justify-content-center flex-column align-items-center text-white">
                    <div class="user-img d-flex justify-content-center align-items-center rounded-circle bg-light-blue"
                         @if(Auth::user()->image)
                             style="background: url('{{asset('storage/' . Auth::user()->image) }}'); background-size: cover; background-position: center;"
                        @endif
                    >
                        @if((!Auth::user()->image))
                            <i class="fa-solid fa-user"></i>
                        @endif
                    </div>
                    <p class="user-name text-uppercase mt-3 mb-0">{{Auth::user()->name}}</p>
                    <p class="user-role text-secondary mt-1">
                        @isadmin
                            Administrador
                        @else
                            Consultor
                        @endisadmin
                    </p>

                </div>
            </div>
            <ul id="offcanvas-menu" class="list-group">
                @isadmin
                <li @if(Request::is('users*')) class="active" @endif>
                    <a href="{{url('users')}}">Utilizadores</a>
                </li>
                @endisadmin
                <li @if(Request::is('estados*')) class="active" @endif>
                    <a href="{{url('estados')}}">Controlo de Estados</a>
                </li>
                <li @if(Request::is('control-apea*')) class="active" @endif>
                    <a href="{{url('control-apea')}}">Controlo de Apeamentos</a>
                </li>
                <li @if(Request::is('custos-apeados')) class="active" @endif>
                    <a href="{{url('custos-apeados')}}">Custos Apeados</a>
                </li>
                <li @if(Request::is('lme-board*')) class="active" @endif>
                    <a href="{{url('lme-board')}}">LME</a>
                </li>
                <li @if(Request::is('relatorio*')) class="active" @endif>
                    <a href="{{url('relatorio')}}">Relat??rio Financeiro</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
