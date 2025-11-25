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
        @if (request()->routeIs('products'))
          <li class="nav-item">
            <a class="nav-link text-white fs-4" href="{{route('product.form')}}">Inserisci prodotto</a>
          </li>
        @endif

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white fs-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Utente
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
          </ul>
        </li>
        
    </div>
  </div>
</nav>