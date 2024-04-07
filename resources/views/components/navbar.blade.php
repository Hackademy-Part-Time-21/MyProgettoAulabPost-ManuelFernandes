<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Registrate</a>
          </li>
          @auth
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto {{Auth::user()->emeil}}
            </a>
            <ul class="dropdown-menu">
                <li class="nav-item">
                    <form action="{{route('logout')}}" id="logout-form" method="post">
                      @csrf
                      <button type="submit" class="btn nav-link">logout</button>
                    </form>
                </li>
                  <li><a class="dropdown-item" href="#" onclick="event.preventDefault();getElementeById('form-logout').submit();">logout</a></li>
            </ul>
          </li>
        @endauth
        @guest

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto
          </a>
            <ul class="dropdown-menu">
              <li> <a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
              <li> <a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
            </ul>
        </li>
          
        @endguest
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>