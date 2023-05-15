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
        <a href="/paket-tour/show">Tours</a>

       </li>
       <li>
        <a href="/user/hotel">Hotels </a>
       </li>
       <li class="submenu">
        <a href="/user/restaurant">Restorant</a>

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
 <section class="parallax" data-parallax="scroll" data-image-src="{{ asset('assets/img/sunset.jpg') }}" data-natural-width="1400" data-natural-height="470">
  <div class="parallax">
   <div class="parallax__layer parallax__layer--back">
    <img src="{{ asset('assets/img/sunset.jpg') }}" alt="Background image" class="img-fluid img-thumbnail rounded-circle" style="width: 200px;">
   </div>
   <div class="parallax__layer parallax__layer--front">
    <div class="parallax__content">
     <div class="container">
      <div class="row">
       <div class="col-lg-12">
        <h1 class="text-center text-white">Welcome to Our Restaurant</h1>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>
 @yield('main')
 @yield('sidebar')
 <footer class="revealed">
 <script src="{{ asset('assets/assets/js/jquery-3.6.1.min.js') }}"></script>
 <script src="{{ asset('assets/assets/js/common_scripts_min.js') }}"></script>
 <script src="{{ asset('assets/assets/js/functions.js') }}"></script>
</body>