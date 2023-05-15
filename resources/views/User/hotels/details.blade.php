<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
	<!-- End Header -->

	<section id="hero_2" class="background-image" data-background="url(img/slide_hero_2.jpg)">
		<div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
			<div class="intro_title">
				<h1>Place your order</h1>
				<div class="bs-wizard row">
					<div class="col-4 bs-wizard-step active">
						<div class="text-center bs-wizard-stepnum">Your cart</div>
						<div class="progress">
							<div class="progress-bar"></div>
						</div>
						<a href="#" class="bs-wizard-dot"></a>
					</div>

					<div class="col-4 bs-wizard-step disabled">
						<div class="text-center bs-wizard-stepnum">Your details</div>
						<div class="progress">
							<div class="progress-bar"></div>
						</div>
						<a href="payment_hotel.html" class="bs-wizard-dot"></a>
					</div>

					<div class="col-4 bs-wizard-step disabled">
						<div class="text-center bs-wizard-stepnum">Finish!</div>
						<div class="progress">
							<div class="progress-bar"></div>
						</div>
						<a href="confirmation_hotel.html" class="bs-wizard-dot"></a>
					</div>
				</div>
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

					<table class="table table-striped options_cart">
						<thead>
							<tr>
								<th colspan="3">
									Add options / Services
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									@foreach ($images as $image)
									<img alt="Image" class="sp-image" src="/storage/{{$image->image_url}}" width="300px" height="150px">
									@endforeach
								<td>{{ $hotel->nama_hotel}}<strong> <br> {{ $hotel->harga}}</strong>
									<p>{{ $hotel->description}}</p>

								</td>
								</td>

								<td>
								</td>
							</tr>
							<tr>

						</tbody>
					</table>
					<div class="add_bottom_15"><small>* Prices for person.</small>
					</div>
				</div>
				<!-- End col-lg-8 -->

				<aside class="col-lg-4">
					<div class="box_style_1">
						<h3 class="inner">- Pesan -</h3>
						<table class="table table_summary">
							<tbody>
								<tr>


									<form action="{{ route('hotel.storePemesanan') }}" method="POST">
										@if(session('warning'))
										<div class="alert alert-warning">{{ session('warning') }}</div>
										@endif
										@csrf
										<input type="hidden" name="hotel_id" value="{{ $hotelId }}">
										<div class="form-group">
											<label for="check_in">Check-In Date</label>
											<input type="date" name="check_in" id="check_in" class="form-control" required>
										</div>
										<div class="form-group">
											<label for="check_out">Check-Out Date</label>
											<input type="date" name="check_out" id="check_out" class="form-control" required>
										</div>
										<div class="form-group">
											<label for="night_count">Night Count:</label>
											<input type="number" name="night_count" id="night_count" class="form-control" required>
										</div>
										<div class="form-group">
											<label for="total_cost">Total Cost</label>

											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text">Rp.</span>
												</div>
												<input type="text" class="form-control" id="total_cost" name="total_cost" readonly>
											</div>
										</div>
										<script>
											// Get the input element for night count and total cost
											const nightCount = document.getElementById('night_count');
											const totalCost = document.getElementById('total_cost');

											// Set the nightly rate from hotel harga
											const nightlyRate = "{{ $hotel->harga }}";
											const roomRate = parseFloat(nightlyRate);

											// Listen for changes to the night count input
											nightCount.addEventListener('input', () => {
												// Calculate the total cost
												const cost = roomRate * nightCount.value;

												// Update the total cost input
												totalCost.value = cost.toLocaleString('id-ID');
											});
										</script>
										<input type="hidden" id="room_rate" value="{{ $hotel->harga }}">
										<button class="btn_full" type="submit" class="btn btn-primary">Submit Reservation</button>
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