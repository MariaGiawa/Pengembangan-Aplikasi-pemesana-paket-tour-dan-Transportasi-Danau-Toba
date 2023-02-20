@extends('layout\App')
@section('main')
<div class="mobile-menu-container"></div>
      </header>
      <!-- ***site header html end*** -->
      <main id="content" class="site-main">
         <section class="inner-page-wrap">
            <!-- ***Inner Banner html start form here*** -->
            <div class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/img7.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="page-title">Package Details</h1>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***Inner Banner html end here*** -->
            <!-- ***career section html start form here*** -->
            <div class="inner-package-detail-wrap">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8 primary right-sidebar">
                        <div class="single-packge-wrap">
                           <div class="single-package-head d-flex align-items-center">
                              <div class="package-title">
                                 <h2>SUMMER HOLIDAY TO THE OXOLOTAN RIVER</h2>
                                 <div class="rating-start-wrap">
                                    <div class="rating-start">
                                       <span style="width: 80%"></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="package-price">
                                 <h6 class="price-list">
                                    <span>$750</span>
                                    / per person
                                 </h6>
                              </div>
                           </div>
                           <div class="package-meta">
                              <ul>
                                 <li>
                                    <i class="fas fa-clock"></i>
                                    7D/6N
                                 </li>
                                 <li>
                                    <i class="fas fa-user-friends"></i>
                                    pax: 10
                                 </li>
                                 <li>
                                    <i class="fas fa-swimmer"></i>
                                    Category : Hangout
                                 </li>

                                 <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    Malaysia
                                 </li>
                              </ul>
                           </div>
                           <figure class="single-package-image">
                              <img src="assets/images/img27.jpg" alt="">
                           </figure>
                           <div class="package-content-detail">
                              <article class="package-overview">
                                 <h3>OVERVIEW :</h3>
                                 <p>Malesuada incidunt excepturi proident quo eros? Id interdum praesent magnis, eius
                                    cumque? Integer aptent officiis recusandae habitasse iure, quisque culpa! Nemo et?
                                    Vel excepteur pellentesque morbi ducimus porro commodo sollicitudin, quidem,
                                    cupiditate ligula doloribus recusandae non, hac, ullam per, natus parturient
                                    sollicitudin! Facilis vestibulum accumsan quisquam excepturi explicabo.</p>
                                 <p>Quam aut, luctus hendrerit, laborum, dolor, consectetur scelerisque quisque feugiat
                                    sequi, ea ipsa consequat atque consectetur. Litora aute error eos.Placerat habitasse
                                    nascetur sit voluptatem ea sint facilisis! Esse sed lacus! Sociosqu ullamcorper
                                    venenatis in.</p>
                              </article>
                              <article class="package-include bg-light-grey">
                                 <h3>INCLUDE & EXCLUDE :</h3>
                                 <ul>
                                    <li><i class="fas fa-check"></i>Specialized bilingual guide</li>
                                    <li><i class="fas fa-times"></i>Guide Service Fee</li>
                                    <li><i class="fas fa-check"></i>Private Transport</li>
                                    <li><i class="fas fa-times"></i>Room Service Fees</li>
                                    <li><i class="fas fa-check"></i>Entrance Fees</li>
                                    <li><i class="fas fa-times"></i>Driver Service Fee</li>
                                    <li><i class="fas fa-check"></i>Breakfast And Lunch Box</li>
                                    <li><i class="fas fa-times"></i>Any Private Expenses</li>
                                 </ul>
                              </article>
                              <article class="package-ininerary">
                                 <h3>ITINERARY :</h3>
                                 <p>Malesuada incidunt excepturi proident quo eros? Id interdum praesent magnis, eius
                                    cumque? Integer aptent officiis recusandae habitasse iure, quisque culpa!</p>
                                 <ul>
                                    <li>
                                       <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                       <span>DAY 1</span>
                                       Departure at the airport and arrival at the hotel
                                    </li>
                                    <li>
                                       <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                       <span>DAY 2</span>
                                       Visit the main museums and lunch included
                                    </li>
                                    <li>
                                       <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                       <span>DAY 3</span>
                                       Excursion in the natural oasis and picnic
                                    </li>
                                    <li>
                                       <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                       <span>DAY 4</span>
                                       Transfer to the airport and return to the agency
                                    </li>
                                 </ul>
                              </article>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="sidebar">
                           <div class="booking-form-wrap">
                              <div class="booking-form-inner primary-bg">
                                 <h3>BOOKING FORM</h3>
                                 <p>Malesuada incidunt excepturi proident quo eros? Sinterdum praesent magnis, eius
                                    cumque.</p>
                                 <form method="get" class="booking-form">
                                    <p>
                                       <input type="text" name="name" placeholder="Your Name...">
                                    </p>
                                    <p>
                                       <input type="email" name="email" placeholder="Your Email...">
                                    </p>
                                    <p class="width-5">
                                       <label>Checkin Date</label>
                                       <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY"
                                          autocomplete="off" readonly="readonly">
                                    </p>
                                    <p class="width-5">
                                       <label>Checkout Date</label>
                                       <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY"
                                          autocomplete="off" readonly="readonly">
                                    </p>
                                    <p>
                                       <button type="submit" class="outline-btn outline-btn-white">INQUIRY NOW</button>
                                    </p>
                                 </form>
                              </div>
                           </div>
                           <div class="related-package">
                              <h3>RELATED IMAGES</h3>
                              <p>Quaerat inventore! Vestibulum aenean volutpat gravida. Sagittis, euismod perferendis.
                              </p>
                              <div class="related-package-slide">
                                 <div class="related-package-item">
                                    <img src="assets/images/img1.jpg" alt="">
                                 </div>
                                 <div class="related-package-item">
                                    <img src="assets/images/img2.jpg" alt="">
                                 </div>
                                 <div class="related-package-item">
                                    <img src="assets/images/img3.jpg" alt="">
                                 </div>
                              </div>
                           </div>
                           <div class="package-map">
                              <iframe
                                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.540423056448!2d-0.12174238402827448!3d51.50330061882345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye!5e0!3m2!1sen!2snp!4v1646314586610!5m2!1sen!2snp"
                                 width="600" height="320" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                           </div>
                           <div class="package-list">
                              <div class="overlay"></div>
                              <h4>MORE PACKAGES</h4>
                              <ul>
                                 <li>
                                    <a href="#"><i aria-hidden="true" class="icon icon-arrow-right-circle"></i>Vacation
                                       Packages</a>
                                 </li>
                                 <li>
                                    <a href="#"><i aria-hidden="true" class="icon icon-arrow-right-circle"></i>Homeymoon
                                       Packages</a>
                                 </li>
                                 <li>
                                    <a href="#"><i aria-hidden="true" class="icon icon-arrow-right-circle"></i>New Year
                                       Packages</a>
                                 </li>
                                 <li>
                                    <a href="#"><i aria-hidden="true" class="icon icon-arrow-right-circle"></i>Weekend
                                       Packages</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***career section html start form here*** -->
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