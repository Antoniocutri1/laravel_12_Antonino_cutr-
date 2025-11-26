<nav class="navbar navbar-expand-lg bg-dark ">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white fs-4" aria-current="page" href="{{route('dashboard')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white fs-4" href="{{route('contact_us')}}">Contattaci</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white fs-4" href="{{route('products')}}">Prodotti</a>
        </li>
        @auth
          
            <li class="nav-item">
              <a class="nav-link text-white fs-4" href="{{route('product.form')}}">Inserisci prodotto</a>
            </li>
          
        @endauth

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white fs-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Utente
          </a>
          <ul class="dropdown-menu">
            @guest
              <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
              <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
            @endguest

            @auth
              <li><a class="dropdown-item" href="{{route('profile')}}">Profilo</a></li>
              <li>
                <form action="{{route('logout')}}" method="POST">
                  @csrf 
                  <button class="dropdown-item" type="submit">Logout</button>
                </form>
              </li>
            @endauth
          </ul>
        </li>
        @auth
          <li class="nav-item">
            <p class="nav-link text-white fs-4">Benvenuto {{Auth::user()->name}}</a>
          </li>
        @endauth
    </div>
  </div>
</nav>