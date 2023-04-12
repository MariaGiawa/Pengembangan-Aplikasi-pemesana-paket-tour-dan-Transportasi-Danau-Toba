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
    <div id="top_line">
      <div class="container">
        <div class="row">
          <div class="col-6"><i class="icon-phone"></i><strong>0045 043204434</strong></div>
          <div class="col-6">
            <ul id="top_links">
              <li><a href="#sign-in-dialog" id="access_link">Sign in</a></li>
            </ul>
          </div>
        </div><!-- End row -->
      </div><!-- End container-->
    </div><!-- End top line-->

    <div class="container">
      <div class="row">
        <div class="col-3">
          <img src="assets/img/logo.jpeg" width="160" height="34" alt="City tours">
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

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-3">
          <h3>Need help?</h3>
          <a href="tel://004542344599" id="phone">+45 423 445 99</a>
          <a href="mailto:help@citytours.com" id="email_footer">help@citytours.com</a>
        </div>
        <div class="col-md-3 col-sm-3">
          <h3>About</h3>
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Register</a></li>
            <li><a href="#">Terms and condition</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-3">
          <h3>Discover</h3>
          <ul>
            <li><a href="#">Community blog</a></li>
            <li><a href="#">Tour guide</a></li>
            <li><a href="#">Wishlist</a></li>
            <li><a href="#">Gallery</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-3">
          <h3>Settings</h3>
          <div class="styled-select">
            <select name="lang" id="lang">
              <option value="English" selected>English</option>
              <option value="French">French</option>
              <option value="Spanish">Spanish</option>
              <option value="Russian">Russian</option>
            </select>
          </div>
          <div class="styled-select">
            <select name="currency" id="currency">
              <option value="USD" selected>USD</option>
              <option value="EUR">EUR</option>
              <option value="GBP">GBP</option>
              <option value="RUB">RUB</option>
            </select>
          </div>
        </div>
      </div><!-- End row -->
      <div class="row">
        <div class="col-md-12">
          <div id="social_footer">
            <ul>
              <li><a href="#"><i class="icon-facebook"></i></a></li>
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-google"></i></a></li>
              <li><a href="#"><i class="icon-instagram"></i></a></li>
              <li><a href="#"><i class="icon-pinterest"></i></a></li>
              <li><a href="#"><i class="icon-vimeo"></i></a></li>
              <li><a href="#"><i class="icon-youtube-play"></i></a></li>
              <li><a href="#"><i class="icon-linkedin"></i></a></li>
            </ul>
            <p>© Citytours 2022</p>
          </div>
        </div>
      </div><!-- End row -->
    </div><!-- End container -->
  </footer><!-- End footer -->

  <div id="toTop"></div><!-- Back to top button -->

  <!-- Search Menu -->
  <div class="search-overlay-menu">
    <span class="search-overlay-close"><i class="icon_set_1_icon-77"></i></span>
    <form role="search" id="searchform" method="get">
      <input value="" name="q" type="text" placeholder="Search..." />
      <button type="submit"><i class="icon_set_1_icon-78"></i>
      </button>
    </form>
  </div><!-- End Search Menu -->

  <!-- Sign In Popup -->
  <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="small-dialog-header">
      <h3>Sign In</h3>
    </div>
    <form>
      <div class="sign-in-wrapper">
        <a href="#0" class="social_bt facebook">Login with Facebook</a>
        <a href="#0" class="social_bt google">Login with Google</a>
        <div class="divider"><span>Or</span></div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="email" id="email">
          <i class="icon_mail_alt"></i>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" name="password" id="password" value="">
          <i class="icon_lock_alt"></i>
        </div>
        <div class="clearfix add_bottom_15">
          <div class="checkboxes float-start">
            <label class="container_check">Remember me
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="float-end"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
        </div>
        <div class="text-center"><input type="submit" value="Log In" class="btn_login"></div>
        <div class="text-center">
          Don’t have an account? <a href="javascript:void(0);">Sign up</a>
        </div>
        <div id="forgot_pw">
          <div class="form-group">
            <label>Please confirm login email below</label>
            <input type="email" class="form-control" name="email_forgot" id="email_forgot">
            <i class="icon_mail_alt"></i>
          </div>
          <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
          <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
        </div>
      </div>
    </form>
    <!--form -->
  </div>
  <!-- /Sign In Popup -->

  <!-- Common scripts -->
  <script src="{{ asset('assets/assets/js/jquery-3.6.1.min.js') }}"></script>
  <script src="{{ asset('assets/assets/js/common_scripts_min.js') }}"></script>
  <script src="{{ asset('assets/assets/js/functions.js') }}"></script>




  <!-- SWITCHER  -->
  <script src="js/switcher.js"></script>
  <script src="{{ asset('assets/assets/js/switcher.js') }}"></script>


  <ul class="colors" id="color1">
    <li><a href="#" class="default" title="Defaul"></a></li>
    <li><a href="#" class="aqua" title="Aqua"></a></li>
    <li><a href="#" class="green_switcher" title="Green"></a></li>
    <li><a href="#" class="orange" title="Orange"></a></li>
    <li><a href="#" class="blue" title="Blue"></a></li>
  </ul>
  </div>
  </div>
</body>

</html>