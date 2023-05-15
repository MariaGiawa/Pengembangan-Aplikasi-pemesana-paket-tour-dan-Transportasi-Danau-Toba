<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
	<meta name="author" content="Ansonika">
	<title>Tour Toba </title>

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

	<!-- SPECIFIC CSS -->
	<link href="css/shop.css" rel="stylesheet">

	<!-- ALTERNATIVE COLORS CSS -->
	<link href="#" id="colors" rel="stylesheet">

</head>

<body>
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
	</header><!-- End Header -->>

	<!-- End Preload -->

	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

	<!-- Header================================================== -->
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
		<!-- End Position -->

		<div class="container margin_60">
			<div class="row">
				<div class="col-lg-9">

					<div class="product-details">

						<div class="basic-details">
							<div class="row">
								<div class="image-column col-sm-6">
									<figure class="image-box"><img src="img/products/image-2.jpg" alt="">
									</figure>
								</div>
								<div class="info-column col-sm-6">
									<div class="details-header">
										<h2>World Travel Guide</h2>
										<div class="item-price">
											<span class="offer">$20.00</span> $15.00
										</div>
										<div class="rating">
											<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i> (3 Customer Reviews)
										</div>
									</div>
									<div class="text">
										<p>
											Lorem ipsum dolor sit amet, te eleifend philosophia sea, elitr evertitur sea id. Has te dictas adversarium. Eum percipitur comprehensam ei. Mel eu molestiae adolescens scriptorem. Ex labores albucius nec, mel et amet discere.
										</p>
									</div>
									<div class="other-options">
										<div class="numbers-row">
											<input type="text" value="0" id="quantity_1" class="qty2 form-control" name="quantity_1">
										</div>
										<a href="shopping-cart.html" class="btn_1">Add To Cart </a>
									</div>
									<!--Item Meta-->
									<ul class="item-meta">
										<li>Categories: <a href="#">Books</a> , <a href="#">Magazine</a>
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
									<a href="#prod-reviews" class="tab-btn">Reviews (03)</a>
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
										<h3>3 Reviews Found</h3>
										<div class="reviews-container">

											<div class="review-box clearfix">
												<figure class="rev-thumb"><img src="img/avatar1.jpg" alt="">
												</figure>
												<div class="rev-content">
													<div class="rating">
														<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
													</div>
													<div class="rev-info">
														Admin – April 03, 2016:
													</div>
													<div class="rev-text">
														<p>
															Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
														</p>
													</div>
												</div>
											</div>

											<div class="review-box clearfix">
												<figure class="rev-thumb"><img src="img/avatar2.jpg" alt="">
												</figure>
												<div class="rev-content">
													<div class="rating">
														<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
													</div>
													<div class="rev-info">
														Ahsan – April 01, 2016:
													</div>
													<div class="rev-text">
														<p>
															Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
														</p>
													</div>
												</div>
											</div>

											<div class="review-box clearfix">
												<figure class="rev-thumb"><img src="img/avatar3.jpg" alt="">
												</figure>
												<div class="rev-content">
													<div class="rating">
														<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
													</div>
													<div class="rev-info">
														Sara – March 31, 2016:
													</div>
													<div class="rev-text">
														<p>
															Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
														</p>
													</div>
												</div>
											</div>

										</div>
										<!--End Review Container-->

										<hr>

										<div class="add-review">
											<h3>Add a Review</h3>
											<form method="post" action="http://www.ansonika.com/citytours/shop-single.html">
												<div class="row">
													<div class="form-group col-md-6">
														<label>Name *</label>
														<input type="text" name="name" value="" placeholder="" class="form-control">
													</div>
													<div class="form-group col-md-6">
														<label>Email *</label>
														<input type="email" name="email" value="" placeholder="" class="form-control">
													</div>
													<div class="form-group col-md-6">
														<label>Website *</label>
														<input type="text" name="website" value="" placeholder="" class="form-control">
													</div>
													<div class="form-group col-md-6">
														<label>Rating </label>
														<div class="rating">
															<a href="#" class="rate-box" title="1 Out of 5"><span class="icon-star"></span></a>
															<a href="#" class="rate-box" title="2 Out of 5"><span class="icon-star"></span><span class="icon-star"></span></a>
															<a href="#" class="rate-box" title="3 Out of 5"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span></a>
															<a href="#" class="rate-box" title="4 Out of 5"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span></a>
															<a href="#" class="rate-box" title="5 Out of 5"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span></a>
														</div>
													</div>
													<div class="form-group col-md-12">
														<label>Your Review</label>
														<textarea name="review-message" class="form-control" style="height:150px;"></textarea>
													</div>
													<div class="form-group col-md-12">
														<button type="button" class="btn_1">Add Review</button>
													</div>
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
							<div class="row">
								<div class="shop-item col-lg-4 col-md-6 col-sm-6">
									<div class="inner-box">
										<div class="image-box">
											<figure class="image">
												<a href="shop-single.html"><img src="img/products/image-1.jpg" alt=""></a>
											</figure>
											<div class="item-options clearfix">
												<a href="shopping-cart.html" class="btn_shop"><span class="icon-basket"></span>
													<div class="tool-tip">Add to cart</div>
												</a>
												<a href="shop-single.html" class="btn_shop"><span class="icon-heart-8"></span>
													<div class="tool-tip">Add to Fav</div>
												</a>
												<a href="shop-single.html" class="btn_shop"><span class="icon-eye"></span>
													<div class="tool-tip">View</div>
												</a>
											</div>
										</div>
										<div class="product_description">
											<div class="rating">
												<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
											</div>
											<h3><a href="shop-single.html">Travel Book</a></h3>
											<div class="price">
												<span class="offer">$20.00</span> $15.00
											</div>
										</div>
									</div>
								</div>
								<!--End Shop Item-->

								<div class="shop-item col-lg-4 col-md-6 col-sm-6">
									<div class="inner-box">
										<div class="image-box">
											<figure class="image">
												<a href="shop-single.html"><img src="img/products/image-2.jpg" alt="">
												</a>
											</figure>
											<div class="item-options clearfix">
												<a href="shopping-cart.html" class="btn_shop"><span class="icon-basket"></span>
													<div class="tool-tip">Add to cart</div>
												</a>
												<a href="shop-single.html" class="btn_shop"><span class="icon-heart-8"></span>
													<div class="tool-tip">Add to Fav</div>
												</a>
												<a href="shop-single.html" class="btn_shop"><span class="icon-eye"></span>
													<div class="tool-tip">View</div>
												</a>
											</div>
										</div>
										<div class="product_description">
											<div class="rating">
												<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
											</div>
											<h3><a href="shop-single.html">World guide</a></h3>
											<div class="price">
												<span class="offer">$10.00</span> $5.00
											</div>
										</div>
									</div>
								</div>
								<!--End Shop Item-->

								<div class="shop-item col-lg-4 col-md-6 col-sm-6">
									<div class="inner-box">
										<div class="image-box">
											<figure class="image">
												<a href="shop-single.html"><img src="img/products/image-3.jpg" alt="">
												</a>
											</figure>
											<div class="item-options clearfix">
												<a href="shopping-cart.html" class="btn_shop"><span class="icon-basket"></span>
													<div class="tool-tip">Add to cart</div>
												</a>
												<a href="shop-single.html" class="btn_shop"><span class="icon-heart-8"></span>
													<div class="tool-tip">Add to Fav</div>
												</a>
												<a href="shop-single.html" class="btn_shop"><span class="icon-eye"></span>
													<div class="tool-tip">View</div>
												</a>
											</div>
										</div>
										<div class="product_description">
											<div class="rating">
												<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
											</div>
											<h3><a href="shop-single.html">Best places to visit</a></h3>
											<div class="price">
												$22.00
											</div>
										</div>
									</div>
								</div>
								<!--End Shop Item-->

							</div>
						</div>
						<!--End Related products-->
					</div>
					<!--End Product-details-->
				</div>
				<!--End Col-->

				<div class="col-lg-3">
					<aside class="sidebar">
						<div class="widget">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button" style="margin-left:0;"><i class="icon-search"></i></button>
								</span>
							</div>
						</div>
						<!-- End Search -->
						<hr>
						<div class="widget" id="cat_shop">
							<h4>Categories</h4>
							<ul>
								<li><a href="#">Places to visit</a>
								</li>
								<li><a href="#">Top tours</a>
								</li>
								<li><a href="#">Tips for travellers</a>
								</li>
								<li><a href="#">Events</a>
								</li>
							</ul>
						</div>
						<!-- End widget -->
						<hr>
						<div class="widget">
							<h4>Filter</h4>
							<input type="text" id="range" name="range" value="">
						</div>
						<!-- End widget -->
						<hr>
						<div class="widget related-products">
							<h4>Top Related </h4>
							<div class="post">
								<figure class="post-thumb">
									<a href="#"><img src="img/products/thumb-1.jpg" alt="">
									</a>
								</figure>
								<h5><a href="#">Grunge Fashion</a></h5>
								<div class="rating">
									<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
								</div>
								<div class="price">
									$ 15.00
								</div>
							</div>
							<div class="post">
								<figure class="post-thumb">
									<a href="#"><img src="img/products/thumb-2.jpg" alt="">
									</a>
								</figure>
								<h5><a href="#">Office Kit</a></h5>
								<div class="rating">
									<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
								</div>
								<div class="price">
									$ 15.00
								</div>
							</div>
							<div class="post">
								<figure class="post-thumb">
									<a href="#"><img src="img/products/thumb-3.jpg" alt="">
									</a>
								</figure>
								<h5><a href="#">Crime &amp; Punishment</a></h5>
								<div class="rating">
									<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
								</div>
								<div class="price">
									$ 15.00
								</div>
							</div>
						</div>
					</aside>
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
	<script src="{{ asset('js/jquery-3.6.1.min.js')}}"></script>
	<script src="{{ asset('js/common_scripts_min.js')}}"></script>
	<script src="{{ asset('js/functions.js')}}"></script>

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
		</div>
	</div>
</body>

</html>