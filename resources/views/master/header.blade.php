<nav class="d-flex justify-content-between align-items-center fixed-top bg-dark-blue shadow-sm">
    <div>
        <span></span>
        <a class="navbar-brand" href="{{url('/')}}">CatApeamentos</a>
    </div>
    <ul class="list-group list-group-horizontal">
        <li class="">
            <a href="">Definições</a>
        </li>
        <li>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</nav>
