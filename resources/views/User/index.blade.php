<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
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
    <link href="assets/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/assets/css/style.css" rel="stylesheet">
    <link href="assets/assets/css/vendors.css" rel="stylesheet">

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
    </header><!-- End Header -->

    <main>
        <div id="carousel-home">
            <div class="owl-carousel owl-theme">
                <div class="owl-slide cover" style="background-image: url(assets/img/Danautoba2.jpg);">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-start">
                                <div class="col-lg-12 static">
                                    <div class="slide-text text-center white">
                                        <h2 class="owl-slide-animated owl-slide-title"> Welcome to<br>Tour Toba</h2>
                                        <p class="owl-slide-animated owl-slide-subtitle">
                                            Enjoy your travel
                                        <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="all_tours_list.html" role="button">Read more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->
                <div class="owl-slide cover" style="background-image: url(assets/img/Danautoba1.jpg);">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-end">
                                <div class="col-lg-6 static">
                                    <div class="slide-text text-end white">
                                        <h2 class="owl-slide-animated owl-slide-title">Discover<br>Vatican Museum</h2>
                                        <p class="owl-slide-animated owl-slide-subtitle">
                                            Discover hidden wonders on trips curated by Citytours Tours Experts
                                        </p>
                                        <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="all_tours_list.html" role="button">Read more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->
                <div class="owl-slide cover" style="background-image: url(assets/img/Danautoba3.jpg);">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-start">
                                <div class="col-lg-6 static">
                                    <div class="slide-text white">
                                        <h2 class="owl-slide-animated owl-slide-title">Love Paris<br>Arch de Triomphe</h2>
                                        <p class="owl-slide-animated owl-slide-subtitle">
                                            Discover hidden wonders on trips curated by Citytours Tours Experts
                                        </p>
                                        <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="all_tours_list.html" role="button">Read more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->
            </div>
            <div id="icon_drag_mobile"></div>
        </div>
        <!--/carousel-->
        <!-- /white_bg -->

        <div class="container margin_60">

            <div class="main_title">
                <h2>Tour Toba <span>Top</span> Tours</h2>
                <p>Temukan Inspirasi Untuk Menjelajah Danau Toba.</p>
            </div>
            @foreach ($tours as $tour)
            <?php
            $ratings = \App\Models\Tour_reviews::where('wisata_id', $tour->id)->get();
            $averageRating = $ratings->avg('rating');
            $starRating = round($averageRating * 2) / 2; // round to nearest 0.5
            $fullStars = floor($starRating);
            $halfStars = round($starRating - $fullStars);
            $emptyStars = 5 - $fullStars - $halfStars;
            ?>
            <div class="owl-carousel owl-theme list_carousel add_bottom_30">
                <div class="item">
                    <div class="tour_container">
                        <div class="ribbon_3 popular"><span>Popular</span></div>
                        <div class="img_container">
                            <a href="{{ route('rating.show', $tour->id) }}">
                                <img src="/public/tours/{{ $tour->image }}" width="800" height="533" class="img-fluid" alt="image">
                                <div class="short_info">
                                    <i class="icon_set_1_icon-44"></i>{{$tour->nama}}
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <p>{{$tour->detail}}</p>
                            <div class="rating">
                                @for ($i = 0; $i < $fullStars; $i++) <i class="icon-star voted"></i>
                                    @endfor
                                    @if ($halfStars)
                                    <i class="icon-star-half-alt voted"></i>
                                    @endif
                                    @for ($i = 0; $i < $emptyStars; $i++) <i class="icon-star-empty"></i>
                                        @endfor
                                        <small>({{$ratings->count()}})</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach



            <p class="text-center add_bottom_30">
                <a href="/rating/show" class="btn_1">View all Tours</a>
            </p>
          
            <hr class="mt-5 mb-5">

            <div class="main_title">
                <h2>Tour Toba <span>Top</span> Hotels</h2>
                <!-- <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p> -->
            </div>

            <div class="owl-carousel owl-theme list_carousel add_bottom_30">
                @foreach ($hotels as $hotel)

                <div class="item">
                    <div class="hotel_container">
                        <div class="ribbon_3 popular"><span>Popular</span></div>
                        <div class="img_container">
                            <a href="{{ route('hotel.details', ['id' => $hotel->id]) }}">
                                @foreach ($hotel->images as $image)
                                <img src="/storage/{{$image->image_url}}" width="400" height="300" class="img-fluid" alt="Image">
                                @endforeach
                                <div class="score"><span>7.5</span>Good</div>
                                <div class="short_info hotel">
                                    <span class="price"><sup>Rp.</sup>{{$hotel->harga}}</span>
                                </div>
                            </a>
                        </div>
                        <div class="hotel_title">
                            <h3><strong>{{$hotel->nama_hotel}}</strong> Hotel</h3>
                            <p>{{$hotel->lokasi}}</p>
                            <div class="rating">
                                <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                            </div>
                            <!-- end rating -->
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                            </div>
                            <!-- End wish list-->

                        </div>
                    </div>
                </div>
                @endforeach
                <!-- End box -->
            </div>
            <!-- /item -->

        </div>
        <!-- /carousel -->

        <p class="text-center nopadding">
            <a href="/user/hotel" class="btn_1">View all Hotels</a>
        </p>

        </div>
        <!-- End container -->

        <div class="white_bg">
            <div class="container margin_60">
                <div class="main_title">
                    <h2>Plan <span>Your Tour</span> Easly</h2>
                    <p>
                        Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
                    </p>
                </div>
                <div class="row feature_home_2">
                    <div class="col-md-4 text-center">
                        <img src="assets/img/adventure_icon_1.svg" alt="" width="75" height="75">
                        <h3>Itineraries studied in detail</h3>
                        <p>Suscipit invenire petentium per in. Ne magna assueverit vel. Vix movet perfecto facilisis in, ius ad maiorum corrumpit, his esse docendi in.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="img/adventure_icon_2.svg" alt="" width="75" height="75">
                        <h3>Room and food included</h3>
                        <p> Cum accusam voluptatibus at, et eum fuisset sententiae. Postulant tractatos ius an, in vis fabulas percipitur, est audiam phaedrum electram ex.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="assets/img/adventure_icon_3.svg" alt="" width="75" height="75">
                        <h3>Everything organized</h3>
                        <p>Integre vivendo percipitur eam in, graece suavitate cu vel. Per inani persius accumsan no. An case duis option est, pro ad fastidii contentiones.</p>
                    </div>
                </div>

                <div class="banner_2">
                    <div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)" style="background-color: rgba(0, 0, 0, 0.3);">
                        <div>
                            <h3><br>Pengalaman Tour</h3>
                            <p>Aktivitas dan  and accommodations</p>
                        </div>
                    </div>
                    <!-- /wrapper -->
                </div>
                <!-- /banner_2 -->

            </div>
            <!-- End container -->
        </div>
        <!-- End white_bg -->

        <div class="container margin_60">
            <div class="main_title">
                <h2>Tour</h2>
                <p>Tour Wisata Lainnya</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <a class="box_news" href="https://kutabalitour.com/">
                        <figure><img src="assets/img/news_home_1.jpg" alt="">
                        </figure>
                        <ul>
                            <li>Bali</li>
                            <li>2023</li>
                        </ul>
                        <h4>kutabalitour</h4>
                        <p>Bali merupakan pulau yang mempunyai daya tarik yang sangat luar biasa bagi wisatawan domestik maupun wisatawan mancanegara yang ingin menghilangkan kepenatan selama melakukan aktivitas kesehariannya.....</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="https://www.javaheritagetour.com/?gclid=CjwKCAjwx_eiBhBGEiwA15gLN1YlDC8plZBKLyvlgSJNbTdFsmuTS5TMq9c2YYpgdrKf3i2pQ4_Y7RoCoIIQAvD_BwE">
                        <figure><img src="assets/img/news_home_2.jpg" alt="">
                        </figure>
                        <ul>
                            <li>Jawa</li>
                            <li>2023</li>
                        </ul>
                        <h4>javaheritagetour</h4>
                        <p>Yogyakarta is one of the oldest royal seats of Java and therefore has a wealth of history, tradition, crafts and culture to offer....</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="http://www.goldenrama.com/">
                        <figure><img src="assets/img/news_home_3.jpg" alt="">
                        </figure>
                        <ul>
                            <li>Indonesia</li>
                            <li>2023</li>
                        </ul>
                        <h4>Goldenrama</h4>
                        <p>Pilih Destinasi liburan kamu dari Bulan - bulan Pilihan & Musim - musim menarik yang tak terlupakan.....</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="https://indonesiatrip.id/">
                        <figure><img src="assets/img/news_home_4.jpg" alt="">
                        </figure>
                        <ul>
                            <li>Indonesia</li>
                            <li>2023</li>
                        </ul>
                        <h4>indonesiatrip</h4>
                        <p>Eksplor keanekaragaman Indonesia....</p>
                    </a>
                </div>
                <!-- /box_news -->
            </div>
            <!-- /row -->
            <p class="btn_home_align"><a href="blog.html" class="btn_1 rounded">View all news</a></p>
        </div>
        <!-- End container -->
    </main>
    <!-- End main -->

    <footer class="revealed">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Need help?</h3>
                    <a href="tel://004542344599" id="phone">+45 423 445 99</a>
                    <a href="mailto:help@citytours.com" id="email_footer">tobatour@gmail.com</a>
                </div>
                <div class="col-md-3">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                       
                        <li><a href="#">Terms and condition</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Discover</h3>
                    <ul>
                        <li><a href="#">Community blog</a></li>
                        <li><a href="#">Gallery</a></li>
                    </ul>
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
                        <p>© Toba Tour 2023</p>
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
    <script src="assets/assets/js/jquery-3.6.1.min.js"></script>
    <script src="assets/assets/js/common_scripts_min.js"></script>
    <script src="assets/assets/js/functions.js"></script>

    <!-- NOTIFY BUBBLES  -->
    <script src="assets/assets/js/notify_func.js"></script>

    <!-- SWITCHER  -->
    <script src="assets/assets/js/switcher.js"></script>

</body>

</html>