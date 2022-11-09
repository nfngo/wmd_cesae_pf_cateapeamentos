<nav class="d-flex justify-content-between align-items-center fixed-top bg-dark-blue shadow-sm fs-5">
    <div class="d-flex align-items-center">
        <div class="offcanvas-btn text-white" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
             aria-controls="offcanvasScrolling">
            <i class="fa-solid fa-bars"></i>
        </div>
        <a class="fw-bold mx-5" href="{{url('/')}}">CatApeamentos</a>
    </div>
    <ul class="list-group list-group-horizontal">
        <li class="">
            <a href="">
                <i class="fa-solid fa-gear"></i>
            </a>
        </li>
        <li>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                <i class="fa-solid fa-power-off"></i>
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
                    <div class="user-img d-flex justify-content-center align-items-center rounded-circle bg-light-blue">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <p class="user-name text-uppercase mt-3 mb-0">João Silva</p>
                    <p class="user-role text-secondary mt-1">Administrador</p>

                </div>
            </div>
            <ul id="offcanvas-menu" class="list-group">
                <li class="active">
                    <a href="">Controlo de Estados</a>
                </li>
                <li>
                    <a href="">Controlo de Apeamentos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
