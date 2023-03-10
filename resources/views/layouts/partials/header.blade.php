<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <div class="logo"><a class="navbar-brand" href="{{route('home')}}"><img src="{{ Vite::asset('resources/img/logo.png') }}" alt="" class="img-fluid"></a></div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('movies')}}">Movies</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>