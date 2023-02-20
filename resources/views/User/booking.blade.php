@extends('layout\App')
@section('main')
         <div class="mobile-menu-container"></div>
      </header>
      <main id="content" class="site-main">
         <section class="booking-inner-page">
            <!-- ***Inner Banner html start form here*** -->
            <div class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/img7.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="page-title">Booking</h1>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***Inner Banner html end here*** -->
            <div class="booking-section">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8 right-sidebar">
                        <!-- step one form html start -->
                        <div class="booking-form-wrap">
                           <form method="get">
                              <div class="booking-content">
                                 <div class="form-title">
                                    <span>1</span>
                                    <h3>Your Details</h3>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label>First name*</label>
                                          <input type="text" class="form-control" name="firstname_booking">
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label>Last name*</label>
                                          <input type="text" class="form-control" name="lastname_booking">
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label>Email*</label>
                                          <input type="email" class="form-control" name="email_booking">
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label>Confirm Email*</label>
                                          <input type="email" class="form-control" name="email_booking">
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label>Phone*</label>
                                          <input type="text" class="form-control" name="lastname_booking">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="booking-content">
                                 <div class="form-title">
                                    <span>2</span>
                                    <h3>Payment Information</h3>
                                 </div>
                                 <div class="row">
                                    <div class="col-12">
                                       <div class="form-group">
                                          <label>Name on card*</label>
                                          <input type="text" class="form-control" name="firstname_booking">
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="row align-items-center">
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <label>Card number*</label>
                                                <input type="text" id="card_number" name="card_number"
                                                   class="form-control">
                                             </div>
                                          </div>
                                          <div class="col-sm-6">
                                             <img src="assets/images/cards.png" alt="Cards">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label>Expiration date*</label>
                                                <div class="row">
                                                   <div class="col-md-6">
                                                      <input type="text" id="expire_month" name="expire_month"
                                                         class="form-control" placeholder="MM">
                                                   </div>
                                                   <div class="col-md-6">
                                                      <input type="text" id="expire_year" name="expire_year"
                                                         class="form-control" placeholder="Year">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label>Security code*</label>
                                                <div class="row">
                                                   <div class="col-4">
                                                      <div class="form-group">
                                                         <input type="text" id="ccv" name="ccv" class="form-control"
                                                            placeholder="CCV">
                                                      </div>
                                                   </div>
                                                   <div class="col-8">
                                                      <img src="assets/images/icon_ccv.gif" alt="ccv"><small>Last 3
                                                         digits</small>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="info-content">
                                    <h4>Or checkout with Paypal</h4>
                                    <p>Lorem ipsum dolor sit amet, vim id accusata sensibus, id ridens quaeque qui. Ne
                                       qui vocent ornatus molestie, reque fierent dissentiunt mel ea.</p>
                                    <a href="#">
                                       <img src="assets/images/paypal_bt.html" alt="">
                                    </a>
                                 </div>
                              </div>
                              <div class="booking-content">
                                 <div class="form-title">
                                    <span>3</span>
                                    <h3>Billing Address</h3>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <div class="form-group">
                                          <label>Country*</label>
                                          <select name="country" id="country">
                                             <option value="" selected="">Select your country</option>
                                             <option value="Europe">Europe</option>
                                             <option value="United states">United states</option>
                                             <option value="Asia">Asia</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label>Street line 1*</label>
                                          <input type="text" name="street_1">
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label>Street line 2</label>
                                          <input type="text" name="street_2">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                       <div class="form-group">
                                          <label>City*</label>
                                          <input type="text" name="city_booking">
                                       </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                       <div class="form-group">
                                          <label>State*</label>
                                          <input type="text" name="state_booking">
                                       </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                       <div class="form-group">
                                          <label>Postal code*</label>
                                          <input type="text" name="postal_code">
                                       </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                       <div class="form-group">
                                          <label>Additional Information</label>
                                          <textarea rows="6"
                                             placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                                       </div>
                                    </div>
                                 </div>
                                 <!--End row -->
                              </div>
                              <div class="form-policy">
                                 <h3>Cancellation policy</h3>
                                 <div class="form-group">
                                    <label class="checkbox-list">
                                       <input type="checkbox" name="s">
                                       <span class="custom-checkbox"></span>
                                       I accept terms and conditions and general policy.
                                    </label>
                                 </div>
                                 <button type="submit" class="round-btn">Submit Now</button>
                              </div>
                           </form>
                        </div>
                        <!-- step one form html end -->
                     </div>
                     <div class="col-lg-4">
                        <div class="price-table-summary">
                           <h4 class="bg-title">Summary</h4>
                           <table>
                              <tbody>
                                 <tr>
                                    <td>
                                       <strong>Packages cost </strong>
                                    </td>
                                    <td class="text-right">
                                       $500
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <strong>Dedicated tour guide</strong>
                                    </td>
                                    <td class="text-right">
                                       $60
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <strong>Insurance</strong>
                                    </td>
                                    <td class="text-right">
                                       $40
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <strong>tax</strong>
                                    </td>
                                    <td class="text-right">
                                       13%
                                    </td>
                                 </tr>
                                 <tr class="total">
                                    <td>
                                       <strong>Total cost</strong>
                                    </td>
                                    <td class="text-right">
                                       <strong>$580</strong>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <div class="widget-bg widget-support-wrap">
                           <div class="icon">
                              <i class="fas fa-phone-volume"></i>
                           </div>
                           <div class="support-content">
                              <h5>HELP AND SUPPORT</h5>
                              <a href="telto:12345678" class="phone">+55 123 987 00</a>
                              <small>Monday to Friday 9.00am - 7.30pm</small>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
      <!-- ***site footer html start form here*** -->
      <footer id="colophon" class="site-footer footer-primary">
         <div class="top-footer">
            <div class="container">
               <div class="upper-footer">
                  <div class="row">
                     <div class="col-lg-3 col-sm-6">
                        <aside class="widget widget_text">
                           <div class="footer-logo">
                              <a href="index-2.html"><img src="assets/images/site-logo.png" alt=""></a>
                           </div>
                           <div class="textwidget widget-text">
                              Urna ratione ante harum provident, eleifend, vulputate molestiae proin fringilla,
                              praesentium magna conubia at perferendis, pretium, aenean aut ultrices.
                           </div>
                        </aside>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                        <aside class="widget widget_latest_post widget-post-thumb">
                           <h3 class="widget-title">RECENT POST</h3>
                           <ul>
                              <li>
                                 <figure class="post-thumb">
                                    <a href="blog-archive.html"><img src="assets/images/img21.jpg" alt=""></a>
                                 </figure>
                                 <div class="post-content">
                                    <h6>
                                       <a href="blog-single.html">BEST JOURNEY TO PEACEFUL PLACES</a>
                                    </h6>
                                    <div class="entry-meta">
                                       <span class="posted-on">
                                          <a href="blog-archive.html">February 17, 2022</a>
                                       </span>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <figure class="post-thumb">
                                    <a href="blog-archive.html"><img src="assets/images/img22.jpg" alt=""></a>
                                 </figure>
                                 <div class="post-content">
                                    <h6>
                                       <a href="blog-single.html">TRAVEL WITH FRIENDS IS BEST</a>
                                    </h6>
                                    <div class="entry-meta">
                                       <span class="posted-on">
                                          <a href="blog-archive.html">February 17, 2022</a>
                                       </span>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </aside>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                        <aside class="widget widget_text">
                           <h3 class="widget-title">CONTACT US</h3>
                           <div class="textwidget widget-text">
                              <p>Feel free to contact and<br /> reach us !!</p>
                              <ul>
                                 <li>
                                    <a href="tel:+01988256203">
                                       <i aria-hidden="true" class="icon icon-phone1"></i>
                                       +01(988) 256 203
                                    </a>
                                 </li>
                                 <li>
                                    <a href="mailtop:info@domain.com">
                                       <i aria-hidden="true" class="icon icon-envelope1"></i>
                                       info@domain.com
                                    </a>
                                 </li>
                                 <li>
                                    <i aria-hidden="true" class="icon icon-map-marker1"></i>
                                    3146 Koontz, California
                                 </li>
                              </ul>
                           </div>
                        </aside>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                        <aside class="widget">
                           <h3 class="widget-title">Gallery</h3>
                           <div class="gallery gallery-colum-3">
                              <figure class="gallery-item">
                                 <a href="assets/images/img10.jpg" data-fancybox="gallery-1">
                                    <img src="assets/images/img21.jpg" alt="">
                                 </a>
                              </figure>
                              <figure class="gallery-item">
                                 <a href="assets/images/img28.jpg" data-fancybox="gallery-1">
                                    <img src="assets/images/img22.jpg" alt="">
                                 </a>
                              </figure>
                              <figure class="gallery-item">
                                 <a href="assets/images/img14.jpg" data-fancybox="gallery-1">
                                    <img src="assets/images/img23.jpg" alt="">
                                 </a>
                              </figure>
                              <figure class="gallery-item">
                                 <a href="assets/images/img15.jpg" data-fancybox="gallery-1">
                                    <img src="assets/images/img24.jpg" alt="">
                                 </a>
                              </figure>
                              <figure class="gallery-item">
                                 <a href="assets/images/img12.jpg" data-fancybox="gallery-1">
                                    <img src="assets/images/img25.jpg" alt="">
                                 </a>
                              </figure>
                              <figure class="gallery-item">
                                 <a href="assets/images/img13.jpg" data-fancybox="gallery-1">
                                    <img src="assets/images/img26.jpg" alt="">
                                 </a>
                              </figure>
                           </div>
                        </aside>
                     </div>
                  </div>
               </div>
               <div class="lower-footer">
                  <div class="row align-items-center">
                     <div class="col-lg-6">
                        <div class="footer-newsletter">
                           <p>Subscribe our newsletter for more update & news !!</p>
                           <form class="newsletter">
                              <input type="email" name="email" placeholder="Enter Your Email">
                              <button type="submit" class="outline-btn outline-btn-white">Subscribe</button>
                           </form>
                        </div>
                     </div>
                     <div class="col-lg-6 text-right">
                        <div class="social-icon">
                           <ul>
                              <li>
                                 <a href="https://www.facebook.com/" target="_blank">
                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="https://www.twitter.com/" target="_blank">
                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="https://www.youtube.com/" target="_blank">
                                    <i class="fab fa-youtube" aria-hidden="true"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="https://www.instagram.com/" target="_blank">
                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="https://www.linkedin.com/" target="_blank">
                                    <i class="fab fa-linkedin" aria-hidden="true"></i>
                                 </a>
                              </li>
                           </ul>
                        </div>
                        <div class="footer-menu">
                           <ul>
                              <li>
                                 <a href="policy.html">Privacy Policy</a>
                              </li>
                              <li>
                                 <a href="policy.html">Term & Condition</a>
                              </li>
                              <li>
                                 <a href="faq.html">FAQ</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="bottom-footer">
            <div class="container">
               <div class="copy-right text-center">Copyright &copy; 2022 Traveler. All rights reserved.</div>
            </div>
         </div>
      </footer>
      <!-- ***site footer html end*** -->
      <a id="backTotop" href="#" class="to-top-icon">
         <i class="fas fa-chevron-up"></i>
      </a>
      <!-- ***custom search field html*** -->
      <div class="header-search-form">
         <div class="container">
            <div class="header-search-container">
               <form class="search-form" role="search" method="get">
                  <input type="text" name="s" placeholder="Enter your text...">
               </form>
               <a href="#" class="search-close">
                  <i class="fas fa-times"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- ***custom search field html*** -->
      <!-- ***custom top bar offcanvas html*** -->
      <div id="offCanvas" class="offcanvas-container">
         <div class="offcanvas-inner">
            <div class="offcanvas-sidebar">
               <aside class="widget author_widget">
                  <h3 class="widget-title">OUR PROPRIETOR</h3>
                  <div class="widget-content text-center">
                     <div class="profile">
                        <figure class="avatar">
                           <img src="assets/images/img21.jpg" alt="">
                        </figure>
                        <div class="text-content">
                           <div class="name-title">
                              <h4> James Watson</h4>
                           </div>
                           <p>Accumsan? Aliquet nobis doloremque, aliqua? Inceptos voluptatem, duis tempore optio quae
                              animi viverra distinctio cumque vivamus, earum congue, anim velit</p>
                        </div>
                        <div class="socialgroup">
                           <ul>
                              <li> <a target="_blank" href="#"> <i class="fab fa-facebook"></i> </a> </li>
                              <li> <a target="_blank" href="#"> <i class="fab fa-google"></i> </a> </li>
                              <li> <a target="_blank" href="#"> <i class="fab fa-twitter"></i> </a> </li>
                              <li> <a target="_blank" href="#"> <i class="fab fa-instagram"></i> </a> </li>
                              <li> <a target="_blank" href="#"> <i class="fab fa-pinterest"></i> </a> </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </aside>
               <aside class="widget widget_text text-center">
                  <h3 class="widget-title">CONTACT US</h3>
                  <div class="textwidget widget-text">
                     <p>Feel free to contact and<br /> reach us !!</p>
                     <ul>
                        <li>
                           <a href="tel:+01988256203">
                              <i aria-hidden="true" class="icon icon-phone1"></i>
                              +01(988) 256 203
                           </a>
                        </li>
                        <li>
                           <a href="mailtop:info@domain.com">
                              <i aria-hidden="true" class="icon icon-envelope1"></i>
                              info@domain.com
                           </a>
                        </li>
                        <li>
                           <i aria-hidden="true" class="icon icon-map-marker1"></i>
                           3146 Koontz, California
                        </li>
                     </ul>
                  </div>
               </aside>
            </div>
            <a href="#" class="offcanvas-close">
               <i class="fas fa-times"></i>
            </a>
         </div>
         <div class="overlay"></div>
      </div>
      <!-- ***custom top bar offcanvas html*** -->
   </div>
@endsection