<!doctype html>
<html lang="en">
  <head>
    <title>Royal Barber</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset ('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset ('fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('fonts/flaticon/font/flaticon.css') }}">


    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}">

    <link rel="shortcut icon" href="images/iconroyalbarberBRANCO.png" type="image/x-icon">
  </head>
  <body>

    <header role="banner">

        <nav class="navbar navbar-expand-md navbar-dark bg-light">
          <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Royal Barber</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
              <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                <li class="nav-item">
                  <a class="nav-link active" href="{{ url ('/') }}">Página Inicial</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{ url ('/sobre') }}">Sobre</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Serviços</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="{{ url ('/cortes') }}">Cortes de Cabelo</a>
                    <a class="dropdown-item" href="{{ url ('/servicos/barba') }}">Design de Barba</a>
                    <a class="dropdown-item" href="{{  url ('/servicos/tratamento')  }}">Tratamentos</a>
                    <a class="dropdown-item" href="{{  url ('/servicos/coloracao')  }}">Coloração de Barba e Cabelo</a>
                    <a class="dropdown-item" href="{{  url ('/servicos/cuidados')  }}">Produtos de Cuidados Masculinos</a>
                  </div>

                </li>


                <li class="nav-item">
                  <a class="nav-link" href="{{ url ('/contato') }}">Contato</a>
                </li>
              </ul>


            <div class="box-btn-login">
                <a href="{{ url('/login') }}" class="btn btn-black btn-login">Login</a>
            </div>


            </div>
          </div>
        </nav>
      </header>

    <!-- END header -->




    <main>
        @yield('conteudo')
    </main>




    <footer class="site-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    <h3 class="mb-4">Sobre</h3>
                    <p class="mb-4">Na nossa barbearia, estamos comprometidos em oferecer serviços de alta qualidade, estilo e atendimento personalizado. Descubra o seu melhor visual conosco</p>
                    <ul class="list-unstyled ">
                        <li class="d-flex"><span class="mr-3"><span class="icon ion-ios-location"></span></span><span class="">Avenida Marechal Tito, 1500 - São Paulo, Brasil</span></li>
                        <li class="d-flex"><span class="mr-3"><span class="icon ion-ios-telephone"></span></span><span class="">11 951694143</span></li>
                        <li class="d-flex"><span class="mr-3"><span class="icon ion-email"></span></span><span class="">codeforgegroup@gmail.com</span></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h3 class="mb-4">Links</h3>
                    <ul class="list-unstyled ">
                        <li><a href="{{ url('/') }}">Início</a></li>
                        <li><a href="{{ url('/sobre') }}">Sobre</a></li>
                        <li><a href="{{ url('cortes') }}">Serviços</a></li>
                        <li><a href="{{ url('/contato') }}">Contato</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Conecte-se</h3>
                    <p>
                        <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                        <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                        <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    </p>
                </div>

                <div class="col-md-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!4v1710634152608!6m8!1m7!1sul2wxu2vksDYtWPq-8SJXA!2m2!1d-23.55317480376496!2d-46.56291741588109!3f199.5034453586373!4f6.901900927865853!5f1.5154630754046785" width="250" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <!-- Link de volta para o Colorlib não pode ser removido. O modelo está licenciado sob CC BY 3.0. -->
                    Direitos Autorais &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados por <a href="https://colorlib.com" target="_blank" style="color: orangered">Code Forge</a>
                    <!-- Link de volta para o Colorlib não pode ser removido. O modelo está licenciado sob CC BY 3.0. -->
                </div>
            </div>
        </div>
    </footer>
    <!-- FIM do rodapé -->


      <!-- loader -->
      <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

      <script src="{{ asset ('js/jquery-3.2.1.min.js') }}"></script>
      <script src="{{ asset ('js/jquery-migrate-3.0.0.js') }}"></script>
      <script src="{{ asset ('js/popper.min.js') }}"></script>
      <script src="{{ asset ('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset ('js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset ('js/jquery.waypoints.min.js') }}"></script>
      <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>

      <script src="{{ asset ('js/jquery.magnific-popup.min.js') }}"></script>
      <script src="{{ asset ('js/magnific-popup-options.js') }}"></script>

      <script src="{{ asset ('js/main.js') }}"></script>
    </body>
  </html>

