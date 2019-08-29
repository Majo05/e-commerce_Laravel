<body>

  <header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top mb-5">
      <a class="navbar-brand" href="/index"><img src="{{asset('css/images/logoDH860-01.png')}}" class="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavSL">
        <ul class="navbar-nav nav-contenido ml-auto"><!-- ml-auto genera margen izquierdo HASTA DONDE PUEDA -->


          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
              </li>
              <li class="nav-item">
                  @if (Route::has('register'))
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                  @endif
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/questions">{{ __('FAQs') }}</a>
              </li>
          @else
              @if (Auth::User()->role_id == 1)

              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ __('Administrar') }}<span class="caret"></span>
                  </a>
                  <section class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{route('products.index')}}">{{ __('Productos') }}</a>
                  </section>
              </li>

              @endif

              <li class="nav-item">
                <a class="nav-link" href={{asset("/order")}}>Carrito<i class="fas fa-shopping-cart">({{ isset(session('carrito')['products']) ? count(session('carrito')['products']) : 0 }})</i></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/index">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/viewAllProducts">Productos</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="/questions">FAQ</a>
              </li>
          <!--
            <div class="btn-group">
                  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Small button
                  </button>
                  <div class="dropdown-menu">
                    ...
                  </div>
                </div>
              -->



                <li class="nav-item dropdown">

                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ __('Mi Cuenta') }} <span class="caret"></span>
                  </a>
                  <section class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <img src="/storage/avatars/{{(Auth::user()->avatar)}}" class="avatar" id="avatar-navbar">
                      <h6 class="dropdown-header"><strong>Hola, <a>{{ Auth::user()->name }}</strong></a></h6>
                      <a class="dropdown-item dropdown-header" href="/profile">{{ __('Perfil') }}</a>
                      <a class="dropdown-item dropdown-header" href="{{ route('logout') }}">
                          {{ __('Cerrar sesion') }}</a>
                  </section>

                </li>

    @endguest

        </ul>
      </div>
    </nav>
<br><br><br><br>
  </header>
