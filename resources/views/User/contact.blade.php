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
                        <h1 class="page-title">CONTACT US</h1>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***Inner Banner html end here*** -->
            <!-- ***contact section html start form here*** -->
            <div class="inner-contact-wrap">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="section-heading">
                           <h5 class="sub-title">GET IN TOUCH</h5>
                           <h2 class="section-title">REACH & CONTACT US!</h2>
                           <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum
                              cumque laudantium. Sit ornare mollitia tenetur, aptent. Eget feugiat error necessitatibus
                              taciti..</p>
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
                                    <a href="https://www.pinterest.com/" target="_blank">
                                       <i class="fab fa-pinterest" aria-hidden="true"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="contact-map">
                           <iframe
                              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.540423056448!2d-0.12174238402827448!3d51.50330061882345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye!5e0!3m2!1sen!2snp!4v1646314586610!5m2!1sen!2snp"
                              width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="contact-from-wrap primary-bg">
                           <form method="get" class="contact-from">
                              <p>
                                 <label>First Name..</label>
                                 <input type="text" name="name" placeholder="Your Name*">
                              </p>
                              <p>
                                 <label>Email Address</label>
                                 <input type="email" name="email" placeholder="Your Email*">
                              </p>
                              <p>
                                 <label>Comments / Questions</label>
                                 <textarea rows="8" placeholder="Your Message*"></textarea>
                              </p>
                              <p>
                                 <input type="submit" name="submit" value="SUBMIT MESSAGE">
                              </p>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***contact section html start form here*** -->
            <!-- ***iconbox section html start form here*** -->
            <div class="contact-details-section bg-light-grey">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-lg-4">
                        <div class="icon-box border-icon-box">
                           <div class="box-icon">
                              <i aria-hidden="true" class="fas fa-envelope-open-text"></i>
                           </div>
                           <div class="icon-box-content">
                              <h4>EMAIL ADDRESS</h4>
                              <ul>
                                 <li>
                                    <a href="mailto:support@gmail.com">support@gmail.com</a>
                                 </li>
                                 <li>
                                    <a href="mailto:name@comapny.com">name@comapny.com</a>
                                 </li>
                                 <li>
                                    <a href="mailto:info@domain.com">info@domain.com</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="icon-box border-icon-box">
                           <div class="box-icon">
                              <i aria-hidden="true" class="fas fa-phone-alt"></i>
                           </div>
                           <div class="icon-box-content">
                              <h4>PHONE NUMBER</h4>
                              <ul>
                                 <li>
                                    <a href="tell:+132599254669">+132 (599) 254 669</a>
                                 </li>
                                 <li>
                                    <a href="callto:123669255587">+123 (669) 255 587</a>
                                 </li>
                                 <li>
                                    <a href="callto:01977259912">+01 (977) 2599 12</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="icon-box border-icon-box">
                           <div class="box-icon">
                              <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                           </div>
                           <div class="icon-box-content">
                              <h4>ADDRESS LOCATION</h4>
                              <ul>
                                 <li>
                                    3146 Koontz, California
                                 </li>
                                 <li>
                                    Quze.24 Second floor
                                 </li>
                                 <li>
                                    36 Street, Melbourne
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***iconbox section html end here*** -->
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