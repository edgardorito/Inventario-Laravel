<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inventario | @yield('title')</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="#">Inicio</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href=" {{ route('users.index' )}} ">Usuarios<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href=" {{ route('products.index' )}} ">Productos<span class="sr-only">(current)</span></a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
              </div>
            </nav>
            <br>
          <section class="section-admin">
              <div class="card">
                <div class="card-header">
                  @yield('title')
                </div>
                <div class="card-body">
                  @include('flash::message')
                  @yield('content')
                </div>
              </div>
          </section>
          <br>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="#">Ayuda</a>
            </nav>

        </div>
      </div>
    </div>

  </body>
</html>
