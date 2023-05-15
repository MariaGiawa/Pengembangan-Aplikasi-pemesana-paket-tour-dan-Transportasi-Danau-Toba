<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
  <meta name="author" content="Ansonika">
  <title>CITY TOURS - City tours and travel site template by Ansonika</title>

  <!-- Favicons-->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

  <!-- GOOGLE WEB FONT -->
  <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&amp;family=Montserrat:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

  <!-- COMMON CSS -->
  <link href="{{ asset('assets/assets/css/bootstrap.min.css ') }}" rel="stylesheet">
  <link href="{{ asset('assets/assets/css/style.css ') }}" rel="stylesheet">
  <link href="{{ asset('assets/assets/css/vendors.css ') }}" rel="stylesheet">

  <!-- SPECIFIC CSS -->
  <link href="{{ asset('assets/assets/css/shop.css ')}} " rel="stylesheet">


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
              @auth
              <!-- Navigation items for authenticated users -->
              @else
              <li><a href="/show-register" id="access_link">Register</a></li>
              <li><a href="/user/login" id="access_link">Login</a></li>
              @endauth
              <li><a href="https://1.envato.market/ryzjQ" target="_parent">Tour DanauToba</a></li>
            </ul>
          </div>
        </div><!-- End row -->
      </div><!-- End container-->
    </div><!-- End top line-->

    <div class="container">
      <div class="row">
        <div class="col-3">
          <div class="col-3">
            <img src="assets/img/logo.jpeg" width="160" height="34" alt="City tours">
          </div>
        </div>
        <nav class="col-9">
          <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
          <div class="main-menu">
            <div id="header_menu">
              <img src="assets/img/logo.jpeg" width="160" height="34" alt="City tours">
            </div>
            <ul>
              <li>
                <a href="/">Home</a>
              </li>
              <li>
                <a href="/paket-tour/show">Tours</a>

              </li>
              <li>
                <a href="/user/hotel">Hotels </a>
              </li>
              <li class="submenu">
                <a href="/user/restaurant">Restoran</a>

              </li>
              <li class="submenu">
                <a href="/rental">Transportation</a>

              </li>
              <li class="megamenu submenu">
                <a href="#">Souvenir</a>

              </li>
              <li class="megamenu submenu">
                <a href="#">Pages</i></a>
              </li>
            </ul>
          </div><!-- End main-menu -->
        </nav>
      </div>
    </div><!-- container -->
  </header>
  <!-- End Header -->

 
  <main>
  <br><br><br><br>

    <div class="container margin_60">
      <div class="row">
        <div class="col-lg-9">

          <div class="product-details">
            @if($transportation)
            <div class="basic-details">
              <div class="row">
                <div class="image-column col-sm-6">
                  <figure class="image-box"><img src="/transportation/{{ $transportation->image }}" alt="">
                  </figure>
                </div>
                <div class="info-column col-sm-6">
                  <div class="details-header">
                    <h2>Nama  : {{ $transportation->name }}</h2>
                    <h3>Harga : {{ $transportation->price }}</h3>
                    <h3>Tipe  : {{ $transportation->type }}</h3>
                    <h3>Lokasi  : {{ $transportation->location }}</h3>
                  </div>
                  </div>
                </div>
              </div>
              <!--End Basic Details-->

              <div class="product-info-tabs">

                <div class="prod-tabs" id="product-tabs">
                  <div class="tab-btns clearfix">
                    <a href="#prod-description" class="tab-btn active-btn"> Deskripsi Produk</a>
                    <a href="#prod-reviews" class="tab-btn">Rental Sekarang</a>
                  </div>

                  <div class="tabs-container">
                    <div class="tab active-tab" id="prod-description">
                      <h3>Rental Description</h3>
                      <div class="content">
                        <p>
                          {{ $transportation->route }}

                        </p>
                      </div>
                    </div>
                    <!--End Tab-->
                    @endif
                    <div class="tab" id="prod-reviews">
                      <div class="form-search light">
                        <form action="{{ route('userrental.store') }}" method="POST">
                          @csrf
                          @if ($errors->any())
                          <div class="alert alert-danger">
                            <ul>
                              @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                            </ul>
                          </div>
                          @endif
                          <input type="hidden" name="status" value="pending">
                          <input type="hidden" name="transportation_id" value="{{ $transportation->id }}">
                          <div class="row row-inputs">
                            <div class="container-fluid">
                              <div class="col-sm-12">
                                <div class="form-group has-icon has-label">
                                  <label for="pickinglocation">Picking Up Location</label>
                                  <input type="text" class="form-control" id="pickinglocation" name="pickinglocation" placeholder="Lokasi Awal" required>
                                  <span class="form-control-icon"></i></span>
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <div class="form-group has-icon has-label">
                                  <label for="pickingoff">Picking Off Location</label>
                                  <input type="text" class="form-control" id="pickingoff" name="pickingoff" placeholder="Lokasi Tujuan" required>
                                  <span class="form-control-icon"></i></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row row-inputs">
                            <div class="container-fluid">
                              <div class="col-sm-7">
                                <div class="form-group has-icon has-label">
                                  <label for="pickingupdate">Picking Up Date</label>
                                  <input type="date" class="form-control" id="pickingupdate" name="pickingupdate" placeholder="dd/mm/yyyy" required>
                                  <span class="form-control-icon"></i></span>
                                </div>
                              </div>
                              <div class="col-sm-5">
                                <div class="form-group has-icon has-label">
                                  <label for="pickinguphour">Picking Up Hour</label>
                                  <input type="time" class="form-control" id="pickinguphour" name="pickinguphour" placeholder="20:00 AM" required>
                                  <span class="form-control-icon"></i></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row row-inputs">
                            <div class="container-fluid">
                              <div class="col-sm-7">
                                <div class="form-group has-icon has-label">
                                  <label for="pickingoffdate">Picking Off Date</label>
                                  <input type="date" class="form-control " id="pickingoffdate" name="pickingoffdate" placeholder="dd/mm/yyyy" required>
                                  <span class="form-control-icon"></i></span>
                                </div>
                              </div>
                              <div class="col-sm-5">
                                <div class="form-group has-icon has-label">
                                  <label for="pickingoffhour">Picking Up Hour</label>
                                  <input type="time" class="form-control" id="pickingoffhour" name="pickingoffhour" placeholder="20:00 AM" required>
                                  <span class="form-control-icon"></i></span>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row row-submit">
                            <div class="container-fluid">
                              <div class="inner">
                                <button type="submit" id="formSearchSubmit3" class="btn btn-submit btn-theme pull-right">Rental</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>

                    </div>
                    <!--End Review Container-->

                    <hr>


                  </div>
                  <!--Sidebar-->
                </div>
              </div>
              <!-- End Container -->
  </main>
  <!-- End main -->

  <footer class="revealed">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>Need help?</h3>
          <a href="tel://004542344599" id="phone">+45 423 445 99</a>
          <a href="mailto:help@citytours.com" id="email_footer">help@citytours.com</a>
        </div>
        <div class="col-md-3">
          <h3>About</h3>
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Register</a></li>
            <li><a href="#">Terms and condition</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h3>Discover</h3>
          <ul>
            <li><a href="#">Community blog</a></li>
            <li><a href="#">Tour guide</a></li>
            <li><a href="#">Wishlist</a></li>
            <li><a href="#">Gallery</a></li>
          </ul>
        </div>
        <div class="col-md-2">
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
  <!-- Common scripts -->
  <script src="{{ asset ('assets/assets/js/jquery-3.6.1.min.js') }}"></script>
  <script src="{{ asset ('assets/assets/js/common_scripts_min.js') }}"></script>
  <script src="{{ asset ('assets/assets/js/functions.js') }}"></script>

  <!-- SWITCHER  -->
  <script src="{{ asset ('assets/assets/js/switcher.js') }}"></script>


  <script>
    if ($('.prod-tabs .tab-btn').length) {
      $('.prod-tabs .tab-btn').on('click', function(e) {
        e.preventDefault();
        var target = $($(this).attr('href'));
        $('.prod-tabs .tab-btn').removeClass('active-btn');
        $(this).addClass('active-btn');
        $('.prod-tabs .tab').fadeOut(0);
        $('.prod-tabs .tab').removeClass('active-tab');
        $(target).fadeIn(500);
        $(target).addClass('active-tab');
      });

    }
  </script>


  <!-- SWITCHER  -->
  <script src="js/switcher.js"></script>

</body>

</html>