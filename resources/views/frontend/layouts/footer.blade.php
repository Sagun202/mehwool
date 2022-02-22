     <!-- End .main -->
     <footer class="footer footer-2">
        <div class="footer-middle border-0">
           <div class="contain padd">
              <div class="row">
                @php($site = Theme::siteSetup())
                 <div class="col-sm-3 col-lg-3">
                    <div class="widget widget-about">
                       <img src="{{ asset('storage/'.$site->logo) }}"  class="footer-logo" alt="Footer Logo" width="105" height="25">
                       <p>{{$site->introduction}} </p>
                       <div class="widget-about-info">
                          <div class="row">
                             <div class="col-sm-12 col-md-12">
                                <span class="widget-about-title">Got Question? Call us 24/7</span>
                                <a href="tel:123456789">{{$site->phone}}</a>
                             </div>
                             <!-- End .col-sm-6 -->
                            
                             <!-- End .col-sm-6 -->
                          </div>
                          <!-- End .row -->
                       </div>
                       <!-- End .widget-about-info -->
                    </div>
                    <!-- End .widget about-widget -->
                 </div>
                 <!-- End .col-sm-12 col-lg-3 -->

                  <div class="col-sm-4 col-lg-2">
                    <div class="widget">


                        @foreach (Theme::getFooterMenu() as $menu)

           <h4 class="widget-title">{{$menu->title}}</h4>
             <ul class="widget-list">
                    @foreach ($menu->menus as $child)

                    <li><a href="{{ $child->link }}">{{ $child->title }}</a></li>
                    @endforeach
           </ul>

            @endforeach
                       
                       <!-- End .widget-list -->
                    </div>
                    <!-- End .widget -->
                 </div>
                 <div class="col-sm-4 col-lg-2">
                    <div class="widget">
                       <h4 class="widget-title">Information</h4>
                       <!-- End .widget-title -->
                       <ul class="widget-list">
                        <ul>

                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('terms-of-use') }}">Terms of Use</a></li>
                            <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                    
                            <li><a href="contact.html">Contact Us</a></li>
                       </ul>
                       <!-- End .widget-list -->
                    </div>
                    <!-- End .widget -->
                 </div>
                 <!-- End .col-sm-4 col-lg-3 -->
               
                 <!-- End .col-sm-4 col-lg-3 -->
                 <div class="col-sm-4 col-lg-2">
                    <div class="widget">
                       <h4 class="widget-title">My Account</h4>
                       <!-- End .widget-title -->
                       <ul class="widget-list">
                          <li><a href="#signin-modal" data-toggle="modal">Sign In</a></li>
                          <li><a href="{{route('cart')}}">View Cart</a></li>
                          <li><a href="{{route('user.wishlists')}}">My Wishlist</a></li>
                       </ul>
                       <!-- End .widget-list -->
                    </div>
                    <!-- End .widget -->
                 </div>
                 <div class="col-sm-4 col-lg-2">
                            <div class="widget widget-newsletter">
                                <h4 class="widget-title">Sign Up to Newsletter</h4><!-- End .widget-title -->

                                <p>Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan.</p>
                                
                                <form action="#">
                                    <div class="input-group">
                                        <input type="email" class="form-control" placeholder="Enter your Email Address" aria-label="Email Adress" required="">
                                        <div class="input-group-append">
                                            <button style="background: red" class="btn btn-dark" type="submit"><i class="bi bi-arrow-right"></i></button>
                                        </div><!-- .End .input-group-append -->
                                    </div><!-- .End .input-group -->
                                </form>
                            </div><!-- End .widget -->
                        </div>
                 <!-- End .col-sm-64 col-lg-3 -->
              </div>
              <!-- End .row -->
           </div>
           <!-- End .container -->
        </div>
        <!-- End .footer-middle -->
        <div class="footer-bottom">
           <div class="container">
              <p class="footer-copyright">Copyright © 2021 Next Aussietech</p>
              <!-- End .footer-copyright -->
              <ul class="footer-menu">
                 <li><a href="#">Terms Of Use</a></li>
                 <li><a href="#">Privacy Policy</a></li>
              </ul>
              <!-- End .footer-menu -->
              <div class="social-icons social-icons-color">
                 <span class="social-label">Social Media</span>
                 <li style="list-style-type:none;">
                    <a class="footer-nav-links-socials-facebook" href="{{ $site->facebook }}">
                        <i style="font-size:30px; color:white;" class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li style="list-style-type:none;">
                    <a class="footer-nav-links-socials-instagram" href="{{ $site->instagram }}">
                        <i style="font-size:30px; color:white;" class="fab fa-instagram"></i>
                    </a>
                </li>
                <li style="list-style-type:none;">
                    <a class="footer-nav-links-socials-twitter" href="{{ $site->twitter }}">
                        <i style="font-size:30px; color:white;" class="fab fa-twitter-square"></i>
                    </a>
                </li>
              </div>
              <!-- End .soial-icons -->
           </div>
           <!-- End .container -->
        </div>
        <!-- End .footer-bottom -->
     </footer>
     <!-- End .footer -->
  </div>
  <!-- End .page-wrapper -->
  <button id="scroll-top" title="Back to Top"><i class="bi bi-arrow-up"></i></button>
  <!-- Mobile Menu -->
  <div class="mobile-menu-overlay"></div>