<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
	<meta name="author" content="Ansonika">
	<title>Toba Tour</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&amp;family=Montserrat:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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
		<br><br><br>
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
		<!-- End Position -->

		<div class="container margin_60">
			<div class="row">
				<div class="col-lg-9">

					<div class="product-details">
						<div class="basic-details">
							<div class="row">
								<div class="image-column col-sm-6">
									<figure class="image-box"><img src="/public/tours/{{ $wisatas->image }}" alt="">
									</figure>
								</div>
								<div class="info-column col-sm-6">
									<div class="details-header">
										<h2>{{$wisatas->nama}}</h2>
										<div class="item-price">
										</div>
										@php
										$fullStars = floor($averageRating);
										$halfStars = ceil($averageRating - $fullStars);
										$emptyStars = 5 - ($fullStars + $halfStars);
										@endphp

										<div class="rating">
											@for ($i = 0; $i < $fullStars; $i++) <i class="icon-star voted"></i>
												@endfor

												@if ($halfStars)
												<i class="icon-star-half-alt voted"></i>
												@endif

												@for ($i = 0; $i < $emptyStars; $i++) <i class="icon-star-empty"></i>
													@endfor

													<small>({{ $ratings->count() }}) Review</small>
										</div>

									</div>

									<div class="text">
										<p>
											{{$wisatas->detail}}
										</p>
									</div>
									<!--Item Meta-->
									<ul class="item-meta">
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!--End Basic Details-->

						<div class="product-info-tabs">

							<div class="prod-tabs" id="product-tabs">
								<div class="tab-btns clearfix">
									<a href="#prod-description" class="tab-btn active-btn">Product description</a>
									<a href="#prod-reviews" class="tab-btn">Reviews <small>({{ $ratings->count() }})</small></a>
								</div>

								<div class="tabs-container">
									<div class="tab active-tab" id="prod-description">
										<h3>Product Description</h3>
										<div class="content">
											<p>
												Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
											</p>
										</div>
									</div>
									<!--End Tab-->

									<div class="tab" id="prod-reviews">
										<h3> <small>({{ $ratings->count() }})</small> Reviews Found</h3>
										<div class="reviews-container">

											@foreach ($ratings as $rating)
											<div class="review-box clearfix">
												<figure class="rev-thumb"><img src="{{ asset('assets/assets/img/pp.png') }}" alt=""></figure>
												<div class="rev-content">
													<div class="rating">
														@php
														$ratingValue = $rating->rating;
														$fullStars = $ratingValue;
														$emptyStars = 5 - $fullStars;
														@endphp

														@for ($i = 0; $i < $fullStars; $i++) <i class="fas fa-star voted"></i>
															@endfor

															@for ($i = 0; $i < $emptyStars; $i++) <i class="far fa-star"></i>
																@endfor
													</div>
													<div class="rev-info">
														{{ $rating->user->name }} – {{ $rating->created_at->format('Y-m-d') }}
													</div>
													<div class="rev-text">
														<p>
															{{ $rating->review }}
														</p>
													</div>
												</div>
											</div>
											@endforeach

										</div>
										<!--End Review Container-->

										<hr>

										<div class="add-review">
											<h3>Add a Review</h3>
											<form method="post" action="{{ route('rating.store') }}">
												@csrf
												@if ($errors->any())
												@foreach ($errors->all() as $error)
												<div>{{$error}}</div>
												@endforeach
												@endif
												<div class="col-md-6">
													<div class="form-group">
														<label>Review</label>
														<select class="form-select" name="rating" id="rating">
															<option value="">Tolong review</option>
															<option value="1">Rendah</option>
															<option value="2">Memadai</option>
															<option value="3">Baik</option>
															<option value="4">Cukup Baik</option>
															<option value="5">Sangat Baik</option>
														</select>
													</div>
												</div>
												<div class="form-group col-md-12">
													<label>Your Review</label>
													<textarea name="review" id="review" class="form-control" style="height:150px;"></textarea>
												</div>
												<input type="hidden" name="wisata_id" value="{{ $wisatas->id }}">
												<div class="form-group col-md-12">
													<button type="submit" class="btn_1">Add Review</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<!--End tabs-container-->
							</div>
							<!--End prod-tabs-->
						</div>
						<!--End product-info-tabs-->

						<div class="related-products">
							<div class="normal-title">
								<h3>Related Products</h3>
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
							<div class="row">
								<div class="shop-item col-lg-4 col-md-6 col-sm-6">
									<div class="inner-box">
										<div class="image-box">
											<figure class="image">
												<a href="{{ route('rating.index', $tour->id) }}"><img src="/public/tours/{{ $tour->image }}" alt=""></a>
											</figure>

										</div>
										<div class="product_description">
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
											<h3><a href="{{ route('rating.index', $tour->id) }}">{{$tour->nama}}</a></h3>
											<div class="price">
												<span class="offer">{{$tour->detail}}
											</div>
										</div>
									</div>
								</div>
								@endforeach
								<!--End Shop Item-->

							</div>
						</div>
						<!--End Related products-->
					</div>
					<!--End Product-details-->
				</div>
				<!--End Col-->
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

	<script src="{{ asset ('assets/assets/js/jquery-3.6.1.min.js') }}"></script>
	<script src="{{ asset ('assets/assets/js/common_scripts_min.js') }}"></script>
	<script src="{{ asset ('assets/assets/js/functions.js') }}"></script>

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
	<script src="{{ asset ('assets/assets/js/switcher.js') }}"></script>


</body>

</html>