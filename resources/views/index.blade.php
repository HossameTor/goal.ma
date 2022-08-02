<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keyword" content="sport , football , basketball , tennis" />
    <meta name="description" content="" />
    <title>Goal.ma</title>

    <!-- css -->
    
    <link rel="preconnect" href={{ asset("https://fonts.googleapis.com") }} />
    <link rel="stylesheet" href={{ asset("https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css") }}>
    <link rel="preconnect" href={{ asset("https://fonts.gstatic.com") }} crossorigin />
    <link
      rel="stylesheet"
      href={{ asset("https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700;800&display=swap") }}
    />
    <link
      rel="stylesheet"
      href={{ asset("https://use.fontawesome.com/releases/v5.15.4/css/all.css") }}
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href={{ asset("assets/css/slick-theme.css") }} />
    <link rel="stylesheet" href={{ asset("assets/css/slick.css") }} />
    <link rel="stylesheet" href={{ asset("assets/css/normalize.css") }} />
    <link rel="stylesheet" href={{ asset("assets/css/style.css") }} />
    <!-- end css  -->
    <style>
      a:hover{
        text-decoration: none;
      }
    </style>
  </head>

  <body>
    <header>
      <div class="top">
        <div class="wrapper row">
          <div class="left col-md-9 mb-2 mb-md-0">
            <button class="btn_toggler">
              <span></span>
              <span></span>
              <span></span>
            </button>
            <a class="logo_brand" href="index.html"
              ><img src={{ asset("assets/images/logo.png") }} alt="logo goal.ma"
            /></a>
          </div>
          <div
            class="right col-md-3 justify-content-center justify-content-md-end"
          >
            <ul class="social-media list-unstyled">
              <li>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </li>
              <li>
                <a href="/contact" target="_blank"
                  ><i class="fas fa-envelope"></i
                ></a>
              </li>
            </ul>
            <a href="#" class="btn sabonner">S'abonner</a>
          </div>
        </div>
      </div>

      <nav class="navigation">
        <ul class="links_header list-unstyled">
          <li class="nav-item">
            <a class="nav-link active" href="/">Acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/1/articles">Football</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/2/articles">Tennis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/3/articles">Rugby</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/4/articles">Cyclisme</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/5/articles">Basket</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/6/articles">People</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/7/articles">Videos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/8/articles">Divers</a>
          </li>
        </ul>
      </nav>
    </header>

    @yield('content')

    <footer class="section_padding bg-light">
      <div class="container-fluid">
        <div class="logo_wrapper">
          <div class="logo_separator"></div>
          <div class="logo">
            <img src={{ asset("assets/images/logo.png") }} alt="goal.ma" />
          </div>
          <div class="logo_separator"></div>
        </div>

        <div class="row justify-content-center mt-4">
          <div class="col-sm-5 text-center">
            <ul class="links_footer list-unstyled">
              <li class="nav-item">
                <a class="nav-link active" href="/1/articles">Football</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/2/articles">Tennis</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/3/articles">Rugby</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/4/articles">Cyclisme</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/5/articles">Basket</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/6/articles">People</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/7/articles">Videos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/8/articles">Divers</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="logo_separator my-4"></div>

        <div class="row justify-content-center">
          <div class="col-sm-5 text-center">
            <h4>Suivez-nous</h4>
            <ul class="social_media mt-3 mb-4">
              <li>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-twitter"></i></a>
              </li>
            </ul>
            <p>© 2022 Goal.ma - Tous Droits Résérvés</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- scripts -->

    <script src={{ asset("assets/js/jquery.js") }}></script>
    <script src={{ asset("assets/js/bootstrap.bundle.min.js") }}></script>
    <script src={{ asset("assets/js/slick.min.js") }}></script>
    <script src={{ asset("assets/js/main.js") }}></script>
    
    <script src={{ asset("https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js") }}></script>
    <!-- end scripts  -->
  </body>
</html>
