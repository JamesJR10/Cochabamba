<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm y-2">
  <div class="container">
    <img src={{ asset('images/Cochabamba1.png') }} alt="imagen" height="80px" width="50px" id="">

    <span class="font-semibold text-xl tracking-tight">MI LLAJTA</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      @auth
        {{ auth()->user()->rol }}
      @endauth
      <ul class="navbar-nav ml-auto">
        <li class=" nav-item "><a href="/" class="nav-link"> {{ __('Home') }} </a></li>
        <li class=" nav-item "><a href="{{ route('cochabamba.index') }}" class="nav-link">
            {{ __('Locales') }} </a></li>
        <li class=" nav-item "><a href="{{ route('restaurant.index') }}" class="nav-link">
            {{ __('Platos') }} </a></li>
        <li class=" nav-item "><a href="{{ route('about') }}" class="nav-link">
            {{ __('About') }} </a></li>
        @guest
          <li class=" nav-item "><a href="{{ 'login' }}" class="nav-link"> Iniciar Sesion </a></li>
          <li class=" nav-item "><a href="{{ 'register' }}" class="nav-link"> Registrarse </a></li>
        @else
          {{-- <li class=" nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img height="30px" width="30px" src="/img/male-avatar.svg" alt=""> </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        {{-- <a class="dropdown-item " href=" /perfil">Perfil</a> --}}
          {{-- <a href="" class="dropdown-item " onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Session</a>
                    </div>

                </li> --}}
          <li class=" nav-item "><a href="" class="nav-link"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Session</a></li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>
