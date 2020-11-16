<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/landing-page.css') }}">
    <title>Bienvenid@! - Vidrieria Ruvalcaba</title>
  </head>
  <body id=inicio>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light sticky-top">
        <div class="collapse navbar-collapse" id="">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link text-info" href="#inicio">Vidrieria Ruvalcaba <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info" href="#caracteristicas">Características</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info" href="#contacto">Contacto</a>
            </li>
          </ul>
          <a class="text-muted text-info" href="{{ route('login') }}" >Inicia sesión</a>
        </div>
      </nav>
      <header class="masthead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-xl-9 mx-auto">
              <h1 class="mb-5 display-2">Sistema informatico de almacenamiento y consulta de información</h1>
              <p>Organice su negocio de una forma facil y eficaz</p>
              <a class="btn btn-info" href="#" role="button">Crear cuenta</a>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            </div>
          </div>
        </div>
      </header>
      <section class="projects-section mt-5" id=caracteristicas>
        <div class="container">
          <h1 class="display-4">Características</h1>
          <div class="card-columns">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Seguro.</h5>
                <p class="card-text"> Use libremente la aplicación mediante una cuenta, con la que será protegida la información del programa.</p>
                <p></p>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Facil y sencillo.</h5>
                <p class="card-text">Guarde, modifique, consulte y elimine la información de una forma sencilla.</p>
                <br>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Visualmente comodo.</h5>
                <p class="card-text">Gracias a las ultimas tecnologias de desarrollo, nos da más posibilidades para el consumidor.</p>
                <p></p>
              </div>
            </div>
          </div>
          <img src="{{ asset('img/Logo.png')}}" alt="Logo Vidrieria Ruvalcaba" class="img-fluid mx-auto d-block">
        </div>
      </section>
      <section class="contact-section bg-dark" id="contacto">
        <div class="container">
          <div class="col-md-10 col-lg-8 mx-auto text-center">
            <h2 class="text-white mb-5">Correo electronico de contacto.</h2>
                <div class="row">
                  <div class="col">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Correo Electronico</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50"><a href="#!">manuel.martinez5090@alumnos.udg.mx</a></div>
                        </div>
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </section>
      <footer class="footer bg-dark text-center text-white-50">
        <div class="container">Copyright © by Manuel Martínez 2020</div>
      </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>