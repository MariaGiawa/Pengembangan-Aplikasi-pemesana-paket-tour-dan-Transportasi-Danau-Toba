<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
  <meta name="author" content="Ansonika">
  <title>Wisata DanauToba</title>

  <!-- Favicons-->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

  <!-- GOOGLE WEB FONT -->
  <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&amp;family=Montserrat:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

  <!-- COMMON CSS -->
  <link href="{{ asset('assets/assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="{{ asset('assets/assets/css/style.css') }}" rel="stylesheet">
  <link href="css/vendors.css" rel="stylesheet">
  <link href="{{ asset('assets/assets/css/vendors.css') }}" rel="stylesheet">


  <!-- ALTERNATIVE COLORS CSS -->
  <link href="#" id="colors" rel="stylesheet">

</head>

<body>

  <div id="preloader">
    <div class="sk-spinner sk-spinner-wave">
      <div class="sk-rect1"></div>
      <div class="sk-rect2"></div>
      <div class="sk-rect3"></div>
      <div class="sk-rect4"></div>
      <div class="sk-rect5"></div>
    </div>
  </div>
  <!-- End Preload -->

  <div class="layer"></div>
  <!-- Mobile menu overlay mask -->

  <!-- Header================================================== -->
  <header>
  

    <div class="container">
      <div class="row">
        <div class="col-3">
          <img src="{{ asset('assets/img/logo.jpeg') }}" width="160" height="34" alt="City tours">
        </div>
      </div>
    </div><!-- container -->
  </header><!-- End Header -->
  <main>
    <section id="hero" class="login">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
            <div id="login">
              <div class="text-center"><img src="{{ asset('assets/img/logo.jpeg') }}" alt="Image" width="160" height="34"></div>
              <hr>
              <form method="POST" action="/login">
                @if(\Session::has('flash_message_error'))
                <div class="alert alert-danger alert-block">
                  <button type="button" class="close" data-dismiss="alert">x</button>
                  <strong>{!! session('flash_message_error')!!}</strong>
                </div>
                @endif
                <a href="#0" class="social_bt google">Login with Google</a>
                <div class="divider"><span>Or</span></div>
                @csrf
                <div class="form-group">
                  <label>Email</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                </div>
                <p class="small">
                  <a href="#">Forgot Password?</a>
                </p>
                <button type="submit" class="btn_full">Sign in</button>
                <a href="/show-register" class="btn_full_outline">Register</a>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End main -->

  <!-- Common scripts -->
  <script src="{{ asset('assets/assets/js/jquery-3.6.1.min.js') }}"></script>
  <script src="{{ asset('assets/assets/js/common_scripts_min.js') }}"></script>
  <script src="{{ asset('assets/assets/js/functions.js') }}"></script>
  <!-- SWITCHER  -->
  <script src="js/switcher.js"></script>
  <script src="{{ asset('assets/assets/js/switcher.js') }}"></script>

  </div>
  </div>
</body>

</html>