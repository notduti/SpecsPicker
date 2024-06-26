<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

  <title>@yield('title', 'SpecsPicker')</title>
</head>
<body>
  <!-- header -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
    <div class="container">
      <a class="navbar-brand" href="#">SpecsPicker</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          
          <a class="nav-link active" href="{{route('getstarted.index')}}">Get started</a>
          <a class="nav-link active" href="{{route('home.index')}}">Home</a>

          @guest
          <a class="nav-link active" href="{{route('login')}}">Login</a>
          <a class="nav-link active" href="{{route('register')}}">Register</a>
          @else
          <form id = "logout" method = "POST" action = "{{ route("logout") }}">
            <a class="nav-link active" onclick = "document.getElementById('logout').submit()" role = "button">Logout</a>
            @csrf
          </form>
          @endguest

        </div>
      </div>
    </div>
  </nav>

  <header class="masthead bg-primary text-white text-center py-4">
    <div class="container d-flex align-items-center flex-column">
      <h2>@yield('subtitle', 'Get minimun hardware specs for a required software')</h2>
    </div>
  </header>
  <!-- header -->

  <div class="container my-4">
    <div class="row">
      <div class="col-md-3">
        <!-- Sidebar -->
        @yield('sidebar')
      </div>
      <div class="col-md-8">
        <!-- Content -->
        @yield('content')
      </div>
    </div>
  </div>

  <hr>
  
  <!-- footer -->
  <div class="copyright py-4 text-center text-black relative-bottom">
    <div class="container">
      <small>
        Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
          href="https://www.itiscuneo.edu.it/">
          Federico Dutto - Thomas Pashollari
        </a>
        <br>
        <b>ITIS Mario Delpozzo Cuneo</b>
      </small>
    </div>
  </div>
  <!-- footer -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
</body>
</html>
