<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
  <meta name="author" content="Ansonika">
  <title>Tour Toba</title>

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
  <link href="{{ asset('assets/assets/css/style.css') }}" rel="stylesheet">
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
              <li><a href="wishlist.html" id="wishlist_link">Wishlist</a></li>
              <li><a href="https://1.envato.market/ryzjQ" target="_parent">Purchase this template</a></li>
            </ul>
          </div>
        </div><!-- End row -->
      </div><!-- End container-->
    </div><!-- End top line-->

    <div class="container">
      <div class="row">
        <div class="col-3">
          <div id="logo">
            <a href="index-2.html"><img src="{{ asset('assets/img/logo.jpeg') }}" width="160" height="34" alt="City tours" class="logo_normal"></a>
            <a href="index-2.html"><img src="{{ asset('assets/img/logo.jpeg') }}" width="160" height="34" alt="City tours" class="logo_sticky"></a>
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
                <a href="/user/restaurant">Tours</a>

              </li>
              <li>
                <a href="/user/hotel">Hotels </a>
              </li>
              <li class="submenu">
                <a href="#">Tour</a>

              </li>
              <li class="submenu">
                <a href="#">Transportation</a>

              </li>
              <li class="megamenu submenu">
                <a href="#">Souvenir</a>

              </li>
              <li class="megamenu submenu">
                <a href="#">Pages</i></a>
              </li>
            </ul>
          </div><!-- End main-menu -->
          <ul id="top_tools">
            <li>
              <a href="javascript:void(0);" class="search-overlay-menu-btn"><i class="icon_search"></i></a>
            </li>
            <li>
              <div class="dropdown dropdown-cart">
                <a href="#0" data-bs-toggle="dropdown" class="cart_bt"><i class="icon_bag_alt"></i><strong>3</strong></a>
                <ul class="dropdown-menu" id="cart_items">
                  <li>
                    <div class="image"><img src="img/thumb_cart_1.jpg" alt="image"></div>
                    <strong><a href="#">Louvre museum</a>1x $36.00 </strong>
                    <a href="#" class="action"><i class="icon-trash"></i></a>
                  </li>
                  <li>
                    <div class="image"><img src="img/thumb_cart_2.jpg" alt="image"></div>
                    <strong><a href="#">Versailles tour</a>2x $36.00 </strong>
                    <a href="#" class="action"><i class="icon-trash"></i></a>
                  </li>
                  <li>
                    <div class="image"><img src="img/thumb_cart_3.jpg" alt="image"></div>
                    <strong><a href="#">Versailles tour</a>1x $36.00 </strong>
                    <a href="#" class="action"><i class="icon-trash"></i></a>
                  </li>
                  <li>
                    <div>Total: <span>$120.00</span></div>
                    <a href="cart.html" class="button_drop">Go to cart</a>
                    <a href="payment.html" class="button_drop outline">Check out</a>
                  </li>
                </ul>
              </div><!-- End dropdown-cart-->
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- container -->
  </header>
  <!-- End Header -->

  <section class="parallax-window" data-parallax="scroll" data-image-src="img/hotels_bg.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1 opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
      <div class="animated fadeInDown">
        <h1>Paris Hotels</h1>
        <p>Cursus neque cursus curae ante scelerisque vehicula.</p>
      </div>
    </div>
  </section>
  <!-- End section -->

  <main>
    <div id="position">
      <div class="container">
        <ul>
          <li><a href="#">Home</a>
          </li>
          <li><a href="#">Category</a>
          </li>
          <li>Page active</li>
        </ul>
      </div>
    </div>
    <!-- Position -->

    <div class="collapse" id="collapseMap">
      <div id="map" class="map"></div>
    </div>
    <!-- End Map -->

    <div class="container margin_60">
      <div class="row">
        <aside class="col-lg-3">
          <p>
            <a class="btn_map" data-bs-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
          </p>

          <div id="filters_col">
            <a data-bs-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i class="icon_set_1_icon-65"></i>Filters</a>
            <div class="collapse show" id="collapseFilters">
              <div class="filter_type">
                <h6>Price</h6>
                <input type="text" id="range" name="range" value="">
              </div>
              <div class="filter_type">
                <h6>Star Category</h6>
                <ul>
                  <li>
                    <label class="container_check">
                      <span class="rating">
                        <i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i>
                      </span>(15)
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="container_check">
                      <span class="rating">
                        <i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i>
                      </span>(10)
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="container_check">
                      <span class="rating">
                        <i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i>
                      </span>(22)
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="container_check">
                      <span class="rating">
                        <i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i>
                      </span>(08)
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="container_check">
                      <span class="rating">
                        <i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i>
                      </span>(08)
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                </ul>
              </div>
              <div class="filter_type">
                <h6>Review Score</h6>
                <ul>
                  <li>
                    <label class="container_check">
                      Superb: 9+ (77)
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="container_check">
                      Good: 7+ (909)
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="container_check">
                      Pleasant: 6+ (1196)
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="container_check">
                      No rating (198)
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                </ul>
              </div>
              <div class="filter_type">
                <h6>Facility</h6>
                <ul>
                  <li>
                    <label class="container_check">
                      Pet allowed
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="container_check">
                      Wifi
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="container_check">
                      Spa
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="container_check">
                      Restaurant
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="container_check">
                      Pool
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="container_check">
                      Parking
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="container_check">
                      Fitness center
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                </ul>
              </div>
              <div class="filter_type">
                <h6>District</h6>
                <ul class="mb-0">
                  <li>
                    <label class="container_radio">
                      Paris Centre
                      <input type="radio" name="location">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="container_radio">
                      La Defance
                      <input type="radio" name="location">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="container_radio">
                      La Marais
                      <input type="radio" name="location">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="container_radio">
                      Latin Quarter
                      <input type="radio" name="location">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
            <!--End collapse -->
          </div>
          <!--End filters col-->
        </aside>
        <!--End aside -->

        <div class="col-lg-9">

          <div id="tools">
            <div class="row justify-content-between">
              <div class="col-md-3 col-sm-4">
                <div class="styled-select-filters">
                  <select name="sort_price" id="sort_price" data-filter-group="sort_price">
                    <option value="*" data-filter-value="" selected="">Show all</option>
                    <option value="lower_price" data-filter-value=".lower_price">Lowest price</option>
                    <option value="higher_price" data-filter-value=".higher_price">Higher price</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-sm-4 d-none d-sm-block text-end">
                <a href="#" class="bt_filters"><i class="icon-th"></i></a> <a href="all_hotels_list.html" class="bt_filters"><i class=" icon-list"></i></a>
              </div>
            </div>
          </div>
          <!--End tools -->
          <div class="isotope-wrapper">
            <div class="row">
              @foreach ($hotels as $hotel)
              <div class="col-md-6 col-lg-6 col-sm-12 col-6 ">
                <div class="hotel_container">
                  <div class="ribbon_3"><span>Top rated</span></div>
                  <div class="img_container">
                    <a href="{{ route('hotel.details', ['id' => $hotel->id]) }}">
                      @foreach ($hotel->images as $image)
                      <img src="/storage/{{$image->image_url}}" width="400" height="300" class="img-fluid" alt="Image">
                      @endforeach
                      <div class="score"><span>8.5</span>Superb</div>
                      <div class="short_info hotel">
                        <span class="price">{{$hotel->harga}}</span>
                      </div>
                    </a>
                  </div>
                  <div class="hotel_title">
                    <h3><strong>{{$hotel->nama_hotel}}</strong> Hotel</h3>
                    <p>{{$hotel->lokasi}}</p>
                    <div class="rating">
                      <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                    </div>
                    <div class="wishlist">
                      <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <!-- End col lg 9 -->
      </div>
      <!-- End row -->
    </div>
    <!-- End container -->
    <div style="display: flex; justify-content: center;">
      {!! $hotels->links('pagination::bootstrap-4') !!}
    </div>





    <!-- <div class="text-center">
      {!! $hotels->links() !!}
    </div> -->


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
  <script src="{{ asset('assets/assets/js/jquery-3.6.1.min.js') }}"></script>
  <script src="{{ asset('assets/assets/js/common_scripts_min.js') }}"></script>
  <script src="{{ asset('assets/assets/js/functions.js') }}"></script>

  <!-- Map -->
  <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAUQKuq-IHkzCt4VoGq2z4XYJ_ip7ZRkws"></script>
  <!-- <script src="js/map_hotels.js"></script> -->
  <script src="{{ asset('assets/assets/js/map_hotels.js') }}"></script>
  <!-- <script src="js/infobox.js"></script> -->
  <script src="{{ asset('assets/assets/js/infobox.js') }}"></script>
  <!-- Masonry filter -->
  <!-- <script src="js/isotope.min.js"></script> -->
  <script src="{{ asset('assets/assets/js/isotope.min.js') }}"></script>

  <script>
    $(window).on('load', function() {

      var $container = $('.isotope-wrapper'),
        filters = {};

      $container.isotope({
        itemSelector: '.isotope-item'
      });

      // filter buttons
      $('.styled-select-filters select').change(function() {
        var $this = $(this);
        var group = $this.attr('data-filter-group');
        filters[group] = $this.find(':selected').attr('data-filter-value');
        var isoFilters = [];
        for (var prop in filters) {
          isoFilters.push(filters[prop])
        }
        var selector = isoFilters.join('');
        $container.isotope({
          filter: selector
        });
        return false;
      });

    });
  </script>

  <!-- SWITCHER  -->
  <!-- <script src="js/switcher.js"></script> -->
  <script src="{{ asset('assets/assets/js/switcher.js') }}"></script>
  <!-- 
  <div id="style-switcher">
    <h2>Color Switcher <a href="#"><i class="icon_set_1_icon-65"></i></a></h2>
    <div>
      <ul class="colors" id="color1">
        <li><a href="#" class="default" title="Defaul"></a></li>
        <li><a href="#" class="aqua" title="Aqua"></a></li>
        <li><a href="#" class="green_switcher" title="Green"></a></li>
        <li><a href="#" class="orange" title="Orange"></a></li>
        <li><a href="#" class="blue" title="Blue"></a></li>
      </ul>
    </div> -->
  </div>
</body>

</html>