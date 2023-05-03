<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tour Toba</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <!-- CSS Global -->
    <link href="{{ asset('assets/rental/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/rental/assets/plugins/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/rental/assets/plugins/fontawesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/rental/assets/plugins/prettyphoto/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/rental/assets/plugins/owl-carousel2/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/rental/assets/plugins/owl-carousel2/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/rental/assets/plugins/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/rental/assets/plugins/swiper/css/swiper.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/rental/assets/plugins/datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{ asset('assets/rental/assets/css/theme.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/rental/assets/css/theme-red-1.css" rel="stylesheet')}}" id="theme-config-link">

    <!-- Head Libs -->
    <script src="{{ asset('assets/rental/assets/plugins/modernizr.custom.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="assets/plugins/iesupport/html5shiv.js"></script>
    <script src="assets/plugins/iesupport/respond.min.js"></script>
    <![endif]-->
</head>

<body id="home" class="wide">

    <!-- WRAPPER -->
    @extends('User\layout\app')
    @section('main')
    <!-- PAGE -->
    <section class="page-section">
        <div class="container">

            <hr class="page-divider small transparent" />
            <h3 class="block-title alt2"><i class="fa fa-angle-down"></i>Find Best Rental Car</h3>

            <!-- Search form -->
            <div class="form-search light">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('usertransportation.findcar') }}" method="POST">
                    @csrf
                    <div class="row row-inputs">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group has-icon has-label">
                                <label for="formSearchName">Name</label>
                                <input type="text" class="form-control" id="formSearchName" name="name" placeholder="Enter name">
                                <span class="form-control-icon"><i class="fa fa-car"></i></span>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group has-icon has-label">
                                <label for="formSearchType">Type</label>
                                <input type="text" class="form-control" id="formSearchType" name="type" placeholder="Enter type">
                                <span class="form-control-icon"><i class="fa fa-car"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row row-submit">
                        <div class="container-fluid">
                            <div class="inner">
                                <button type="submit" id="formSearchSubmit2" class="btn btn-submit btn-theme pull-right">Find Car</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <!-- /Search form -->

            <hr class="page-divider half transparent" />
            <h3 class="block-title alt2"><i class="fa fa-angle-down"></i>Result Rental Car</h3>
            <div class="row">
                @foreach($transportations as $transportation)
                <div class="col-md-3">
                    <div class="thumbnail no-border no-padding thumbnail-car-card">
                        <div class="media">
                            <a class="media-link" data-gal="prettyPhoto" href="#">
                                <img src="/transportation/{{ $transportation->image }}" alt="" style="width: 300px; height: 200px; object-fit: cover;">
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="#">{{ $transportation->name }}</a></h4>
                            <div class="caption-text">{{ $transportation->price }}</div>
                            <div class="buttons">
                                <a class="btn btn-theme btn-theme-dark" href="#">Rent It</a>
                            </div>
                            <table class="table">
                                <tr>
                                    <td><i class="fa fa-car"></i>{{ $transportation->type }}</td>
                                    <td><i class="fa fa-dashboard"></i>{{ $transportation->duration }}</td>
                                    <td><i class="fa fa-cog"></i> {{ $transportation->location }}</td>
                                    <td><i class="fa fa-road"></i> {{ $transportation->route }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- /PAGE -->

    <!-- PAGE -->
    <section class="page-section no-padding no-bottom-space-off">
        <div class="container full-width">

            <!-- Google map -->
            <div class="google-map">
                <div id="map-canvas"></div>
            </div>
            <!-- /Google map -->

        </div>
    </section>
    <!-- /PAGE -->


    <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

    </div>
    <!-- /WRAPPER -->

    <!-- JS Global -->
    <script src="{{ asset('assets/rental/assets/plugins/jquery/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('assets/rental/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/rental/assets/plugins/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/rental/assets/plugins/superfish/js/superfish.min.js') }}"></script>
    <script src="{{ asset('assets/rental/assets/plugins/prettyphoto/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('assets/rental/assets/plugins/owl-carousel2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/rental/assets/plugins/jquery.sticky.min.js') }}"></script>
    <script src="{{ asset('assets/rental/assets/plugins/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/rental/assets/plugins/jquery.smoothscroll.min.js') }}"></script>
    <!--<script src="assets/plugins/smooth-scrollbar.min.js"></script>-->
    <!--<script src="assets/plugins/wow/wow.min.js"></script>-->
    <script>
        // WOW - animated content
        //new WOW().init();
    </script>
    <script src="{{ asset('assets/rental/assets/plugins/swiper/js/swiper.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/rental/assets/plugins/datetimepicker/js/moment-with-locales.min.js') }}"></script>
    <script src="{{ asset('assets/rental/assets/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>

    <!-- JS Page Level -->
    <script src="{{ asset('assets/rental/assets/js/theme-ajax-mail.js') }}"></script>
    <script src="{{ asset('assets/rental/assets/js/theme.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

    <!--[if (gte IE 9)|!(IE)]><!-->
    <!-- <script src="assets/rental/assets/plugins/jquery.cookie.js"></script>
<script src="assets/rental/assets/js/theme-config.js"></script> -->
    <!--<![endif]-->

</body>

</html>
@endsection