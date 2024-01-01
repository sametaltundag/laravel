<!DOCTYPE html>
<html lang="tr">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>@yield('title') | SMT Tech</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('front/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/templatemo-finance-business.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/owl.css')}}">
<!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-clock-o"></i>Çalışma Saatleri 09.00-17.00</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>+90 541 234 56 78</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{route('home')}}"><h2>SMT TECH</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Anasayfa
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">Hakkımızda</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="{{route('services')}}">Hizmetlerimiz</a>
              </li>                          
              <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">İletişim</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

@yield('content')



    <div class="partners">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel">
            
              <div class="partner-item">
                <img src="{{asset('front/assets/images/client-01.png')}}" title="1" alt="1">
              </div>
              
              <div class="partner-item">
                <img src="{{asset('front/assets/images/client-01.png')}}" title="2" alt="2">
              </div>
              
              <div class="partner-item">
                <img src="{{asset('front/assets/images/client-01.png')}}" title="3" alt="3">
              </div>
              
              <div class="partner-item">
                <img src="{{asset('front/assets/images/client-01.png')}}" title="4" alt="4">
              </div>
              
              <div class="partner-item">
                <img src="{{asset('front/assets/images/client-01.png')}}" title="5" alt="5">
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4>SMT WEB</h4>
            <p>Firma tarafından düzenlenecektir.</p>
            <ul class="social-icons">
              <li><a rel="nofollow" href="https://fb.com/templatemo" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Sayfalar</h4>
            <ul class="menu-list">
              <li><a href="{{route('home')}}">Anasayfa</a></li>
              <li><a href="{{route('about')}}">Hakkımızda</a></li>
              <li><a href="{{route('services')}}">Hizmetlerimiz</a></li>
              <li><a href="{{route('contact')}}">İletişim</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item last-item">
            <h4>İletişim Formu</h4>
            <div class="contact-form">
              <form id="contact footer-contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Adınız soyadınız" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Posta Adresiniz" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Mesajınız" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Gönder</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Tüm hakları saklıdır. &copy; 2023 SMT Yazılım ve Bilişim</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('front/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Additional Scripts -->
    <script src="{{asset('front/assets/js/custom.js')}}"></script>
    <script src="{{asset('front/assets/js/owl.js')}}"></script>
    <script src="{{asset('front/assets/js/slick.js')}}"></script>
    <script src="{{asset('front/assets/js/accordions.js')}}"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>