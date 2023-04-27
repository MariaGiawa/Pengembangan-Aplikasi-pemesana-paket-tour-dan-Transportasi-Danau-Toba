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
    <link href="{{ asset('assets/assets/css/bootstrap.min.css')}} " rel="stylesheet">
    <link href="{{ asset('assets/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/assets/css/vendors.css')}}" rel="stylesheet">
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
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span></span></a>
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

    <section id="hero_2" class="background-image" data-background="url({{ asset('assets/img/Danautoba2.jpg') }})">
        <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
            <div class="intro_title">
                @foreach ($pakettours as $pakettour)
                <h5>{{ $pakettours->nama }}</h5>
                @endforeach

                <p>Keeksotikan Danau Toba dapat anda rasakan langsung dengan berbagai aktifitas seru yang menarik dan tak terlupakan</p>


                <!-- End bs-wizard -->
            </div>
            <!-- End intro-title -->
        </div>
        <!-- End opacity-mask-->
    </section>
    <!-- End Section hero_2 -->
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
        <!-- End position -->


        <div class="container margin_60">
            <div class="row">
                <div class="col-lg-8">
                    <div class="alert alert-info" role="alert"><strong>Rooms available</strong> for the selected dates.
                        <br>PLEASE SELECT YOUR QUANTITY.
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="3">
                                    Add options / Services
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @if ($pakettours)
                                <td>
                                    <center>
                                        <img alt="Image" class="sp-image" src="/public/tour/{{ $pakettours->image }}" width="500px">
                                    </center>
                                    <h5>{{ $pakettours->nama }}</h5>
                                    <p><strong>{{ $pakettours->harga }}</strong></p>
                                    <p>{{ $pakettours->detail }}</p>
                                </td>
                                @endif
                            </tr>
                        </tbody>

                    </table>
                    <div class="add_bottom_15"><small>* Prices for person.</small>
                    </div>
                </div>
                <!-- End col-lg-8 -->
                <aside class="col-lg-4" style="position: relative;">
                    <div class="box_style_1">
                        <h3 class="inner">- Pesan -</h3>
                        <table class="table table_summary">
                            <tbody>
                                <tr>
                                    <form method="POST" action="{{ route('booking.store') }}">
                                        @csrf
                                        @if(session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                        @endif
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="nama" name="nama" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="telepon" class="form-label">Phone</label>
                                            <input type="tel" class="form-control" id="telepon" name="telepon" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tanggal" class="form-label">Tour Date</label>
                                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                                        </div>
                                        <input type="hidden" name="tour_id" value="{{ $pakettours->id }}">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>


                                    <!-- End main -->

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
                </aside>
                <!-- Jquery -->
                <script src="{{ asset('assets/assets/js/jquery-3.6.1.min.js') }}"></script>
                <script src="{{ asset('assets/assets/js/common_scripts_min.js') }}"></script>
                <script src="{{ asset('assets/assets/js/functions.js') }}"></script>


                <script>
                    $('.carousel-thumbs').owlCarousel({
                        loop: true,
                        margin: 5,
                        responsiveClass: true,
                        nav: false,
                        responsive: {
                            0: {
                                items: 1
                            },
                            600: {
                                items: 3
                            },
                            1000: {
                                items: 4,
                                nav: false,
                                loop: false
                            }
                        }
                    });
                </script>

                <!-- SWITCHER  -->
                <script src="{{ asset('assets/assets/js/switcher.js') }}"></script>
                <div id="style-switcher">
                    <div>
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