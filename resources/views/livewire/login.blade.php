<div class="hidden-xs">
  @auth
     <div class="dropdown">
                       
                                    <div class="dropdown">
                                        <a class="current-open" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" href="#"><span>My Account</span>
                                            <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu " role="menu">

                                         

                                            <li class="dropdown-item">
                                                @auth
                                                <a style="color:black !important;"
                                                    href="{{ (auth()->user()->hasRole('user'))? route('user.dashboard'): route('dashboard') }}">My
                                                    Account
                                                </a>
                                                @else
                                                <a style="color:black !important;" href="{{ route('login') }}">Account
                                                </a>
                                                @endif
                                            </li>
                                            <li class="dropdown-item"><a style="color:black !important;"
                                                    href="{{ route('user.wishlists') }}">Wishlist</a>
                                            </li>
                                            
                                            <li class="dropdown-item"><a style="color:black !important;" href="{{ route('about') }}">About
                                                    us</a>
                                            </li>
                                            <li class="dropdown-item" >
                                            @auth
                                            <form method="POST" action="{{ route('logout') }}" class="logout">
                                                @csrf
                                            </form>
                                            <li><a style="color:black !important;" onclick="event.preventDefault();
                                                $('.logout').submit();">Log out</a></li>
                                            @endauth
                                          </li>
                                        </ul>
                                    </div>
                                </div>

                                @else
                           
                                <a href="#signin-modal" data-toggle="modal" class="wishlist-link">
                                  <i class='fas fa-user-circle'></i>
                                  <span class="wishlist-txt">login / join</span>
                                </a>
                               
@endauth
   


                       
   
 


<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-body">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="icon-close"></i></span>
              </button>

              <div class="form-box">
                  <div class="form-tab">
                      <ul class="nav nav-pills nav-fill" role="tablist">
                          <li class="nav-item">
                              <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                          </li>
                      </ul>
                      <div class="tab-content">
                          <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                              <form action="#" wire:submit.prevent="login">
                                  <div class="form-group">
                                      <label for="singin-email"> email address *</label>
                                      <input wire:model.defer="email" type="text" class="form-control" id="singin-email" name="singin-email" required>
                                  </div><!-- End .form-group -->

                                  @error('email')
                                  <div class="alert alert-danger" role="alert">
                                      {{ $message }}
                                  </div>
                                  @enderror

                                  <div class="form-group">
                                      <label for="singin-password">Password *</label>
                                      <input type="password" wire:model.defer="password" class="form-control" id="singin-password" name="singin-password" required>
                                  </div><!-- End .form-group -->

                                  @error('password')
                              <div class="alert alert-danger" role="alert">
                                  {{ $message }}
                              </div>
                       @enderror

                                  <div class="form-footer">
                                      <button type="submit" class="btn btn-outline-primary-2">
                                          <span>LOG IN</span>
                                          <i class="icon-long-arrow-right"></i>
                                      </button>

                                      <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="signin-remember">
                                          <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                      </div><!-- End .custom-checkbox -->

                                      
                                  </div><!-- End .form-footer -->
                              </form>
                              <div class="form-choice">
                                  <p class="text-center">or sign in with</p>
                                  <div class="row">
                                      <div class="col-sm-6">
                                          <a href="#" class="btn btn-login btn-g">
                                              <i class="icon-google"></i>
                                              Login With Google
                                          </a>
                                      </div><!-- End .col-6 -->
                                      <div class="col-sm-6">
                                          <a href="#" class="btn btn-login btn-f">
                                              <i class="icon-facebook-f"></i>
                                              Login With Facebook
                                          </a>
                                      </div><!-- End .col-6 -->
                                  </div><!-- End .row -->
                              </div><!-- End .form-choice -->
                          </div><!-- .End .tab-pane -->
                          <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                            @livewire('register',['currentRouteName'=>url()->current()])
                          </div><!-- .End .tab-pane -->
                      </div><!-- End .tab-content -->
                  </div><!-- End .form-tab -->
              </div><!-- End .form-box -->
          </div><!-- End .modal-body -->
      </div><!-- End .modal-content -->
  </div><!-- End .modal-dialog -->
</div>



