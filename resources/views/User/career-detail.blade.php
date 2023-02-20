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
                        <h1 class="page-title">career details</h1>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***Inner Banner html end here*** -->
            <!-- ***career section html start form here*** -->
            <div class="inner-career-detail-wrap">
               <div class="container">
                  <div class="row">
                     <div class="col-md-5">
                        <figure class="career-detail-image">
                           <img src="assets/images/img31.jpg">
                        </figure>
                     </div>
                     <div class="col-md-7">
                        <div class="tab-section">
                           <div class="tab-container">
                              <div class="responsive-tabs">
                                 <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                       <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab"
                                          role="tab">
                                          JOB DESCRIPTION
                                       </a>
                                    </li>
                                    <li class="nav-item">
                                       <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab">
                                          EXPERIENCE
                                       </a>
                                    </li>
                                    <li class="nav-item">
                                       <a id="tab-C" href="#pane-C" class="nav-link" data-bs-toggle="tab" role="tab">
                                          REQUIREMENT
                                       </a>
                                    </li>
                                 </ul>

                                 <div id="nav-tab-content" class="tab-content" role="tablist">
                                    <div id="pane-A" class="card tab-pane fade show active" role="tabpanel"
                                       aria-labelledby="tab-A">
                                       <div class="card-header" role="tab" id="heading-A">
                                          <h5 class="mb-0">
                                             <a data-bs-toggle="collapse" href="#collapse-A" aria-expanded="true"
                                                aria-controls="collapse-A">
                                                JOB DESCRIPTION
                                             </a>
                                          </h5>
                                       </div>
                                       <div id="collapse-A" class="collapse show" data-bs-parent="#nav-tab-content"
                                          role="tabpanel" aria-labelledby="heading-A">
                                          <div class="card-body">
                                             <h4>#JOB DESCRIPTION</h4>
                                             <p>Reprehenderit hic bibendum repellendus, repellat auctor! Integer
                                                temporibus, facilisis iaculis alias senectus, non quam molestiae
                                                incidunt cubilia, fuga? Quasi natoque dicta a fuga dapibus dolore
                                                molestie sociis erat, convallis quibusdam possimus semper nonummy
                                                mattis, quasi.</p>
                                             <p>Autem nec quaerat cubilia magnam eu mauris hic hac nisi eos nobis
                                                officiis corrupti consequuntur molestie urna volutpat! Quos diamlorem
                                                convallis vestibulum doloremque iste facilisi.</p>
                                             <p>Autem nec quaerat cubilia magnam eu mauris hic hac nisi eos nobis
                                                officiis corrupti consequuntur molestie urna volutpat! Quos diamlorem
                                                convallis vestibulum doloremque iste facilisi vallis vestibulum dol.</p>
                                          </div>
                                       </div>
                                    </div>

                                    <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                                       <div class="card-header" role="tab" id="heading-B">
                                          <h5 class="mb-0">
                                             <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B"
                                                aria-expanded="false" aria-controls="collapse-B">
                                                EXPERIENCE
                                             </a>
                                          </h5>
                                       </div>
                                       <div id="collapse-B" class="collapse" data-bs-parent="#nav-tab-content"
                                          role="tabpanel" aria-labelledby="heading-B">
                                          <div class="card-body">
                                             <h4>#EXPERIENCE</h4>
                                             <p>Reprehenderit hic bibendum repellendus, repellat auctor! Integer
                                                temporibus, facilisis iaculis alias senectus, non quam molestiae
                                                incidunt cubilia, fuga? Quasi natoque dicta a fuga dapibus dolore
                                                molestie sociis erat, convallis quibusdam possimus semper nonummy
                                                mattis, quasi.</p>
                                             <ul>
                                                <li>Dictumst sapiente doloremque proident feugiat.</li>
                                                <li>Minim laudantium dictumst totam porta.</li>
                                                <li>Purus deserunt earum inceptos.</li>
                                                <li>Vulputate sequi natoque, delectus hendrerit.</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>

                                    <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
                                       <div class="card-header" role="tab" id="heading-C">
                                          <h5 class="mb-0">
                                             <a data-bs-toggle="collapse" href="#collapse-C" aria-expanded="true"
                                                aria-controls="collapse-C">
                                                REQUIREMENT
                                             </a>
                                          </h5>
                                       </div>
                                       <div id="collapse-C" class="collapse" data-bs-parent="#nav-tab-content"
                                          role="tabpanel" aria-labelledby="heading-C">
                                          <div class="card-body">
                                             <h4>#REQUIREMENT</h4>
                                             <p>
                                                Recusandae egestas? Inventore culpa erat, qui rem nec lacinia leo eos
                                                diamlorem voluptatibus, lacinia tempus rhoncus imperdiet posuere auctor
                                                ut? Facere convallis dignissim atque. Veritatis, itaque consequatur modi
                                                ipsum occaecat perspiciatis. Voluptas nam tristique temporibus commodo,
                                                convallis distinctio. Vestibulum provident.
                                             </p>
                                             <p>
                                                Egestas, iste, nesciunt deserunt! Aut consectetur gravida? Cum vivamus
                                                class accusamus voluptate fusce tellus ab fugit, recusandae cum suscipit
                                                nec.
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="job-description primary-bg text-center">
                           <h4>SUMMARY</h4>
                           <ul>
                              <li>
                                 <span>Post :</span>
                                 <h5>TRAVEL GUIDE</h5>
                              </li>
                              <li>
                                 <span>Time :</span>
                                 <h5>FULL TIME / PART TIME</h5>
                              </li>
                              <li>
                                 <span>Salary :</span>
                                 <h5>NEGOTIABLE</h5>
                              </li>
                              <li>
                                 <span>No. of Vacancy :</span>
                                 <h5>8</h5>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="job-description bg-light-grey">
                           <h4>HOW TO APPLY</h4>
                           <ul>
                              <li>
                                 <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                 Veniam suspen disse volup.
                              </li>
                              <li>
                                 <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                 Etiam porta repellendus nihil.
                              </li>
                              <li>
                                 <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                 Ornare ornare tias torquent.>
                              </li>
                              <li>
                                 <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                 Adip nostrum fames porta.
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="job-description bg-image text-center">
                           <div class="overlay"></div>
                           <h3>SEND US C.V</h3>
                           <p>Convallis neque voluptas varius erat do bibendum, corrupti!</p>
                           <a href="mailto:info@company.com">
                              <i aria-hidden="true" class="fas fa-envelope-open-text"></i>
                              info@company.com
                           </a>
                           <a href="contact.html" class="round-btn">Contact Us</a>
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