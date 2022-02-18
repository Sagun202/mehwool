<header class="header header-10 header-intro-clearance">
    <div class="header-top">
        <div class="container-fluid">
            <div class="header-left">
           
                @php($site = Theme::siteSetup())
                <ul>
                    <li><a href=""><i class=" bi bi-telephone"></i> &nbsp;Call: {{ $site->phone }}</a></li>
                </ul>
            </div><!-- End .header-left -->




            <div class="header-right">



&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <ul >
                 
                  
                </ul><!-- End .top-menu -->
            </div><!-- End .header-right -->
        </div><!-- End .container-fluid -->
    </div>

    <div class="header-middle">
        <div class="padd row" style="justify-content: space-between; align-items:center">
            <div class="col-1">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>
                
                <a href="{{route('index')}}" class="logo">
                    <img src="{{ asset('storage/'.$site->logo) }}" >
                </a>
            </div><!-- End .header-left -->

            <div class="col-6">
                <div class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                    <form id="search-form" action="{{ route('search') }}" method="get">
                        <div class="header-search-wrapper  search-wrapper-wide " style="width: 145%">
                            
                            
                            <input data-provide="typeahead" type="text" class="form-control typeahead"
                            placeholder="Search for product..." name="key" autocomplete="off"  value="{{ \Request::get('key') ?? '' }}" />
                            <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                        </div><!-- End .header-search-wrapper -->
                    </form>

   
                </div><!-- End .header-search -->
            </div>

            <div class="col-2 " >
         
                   <div style="display: flex;  align-items: center; justify-content: space-evenly;">
                       <div >
                        <a href="{{route('cart')}}">
                            @livewire('cart-counter')
                        </a>
                       </div>
                       <div>
                        <a href="{{route('user.wishlists')}}" class="wishlist-link">
                            <i class="bi bi-clipboard2-heart"></i>
                           
                            <span class="wishlist-txt">Wishlist</span>
                        </a>
                       </div>
                   
                  <div >
                    @livewire('login')
                  </div>
    
                  

                   </div>

                  

                   
              
                  



             
                
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->








    <div class="header-bottom sticky-header" >
        <div class="header-center" style="margin-left: 12.5%;" >
         







                @php($categories = FrontEndHandler::getCategoryTree())
                <nav class="main-nav">
               
                    <ul class="menu">
                            @foreach ($categories as$count=> $parent)
                            @if($count <6)

                        

                        <li>
                            <a href="{{ route('category',$parent->slug) }}">{{ $parent->name }} &nbsp; <i class="fas fa-angle-down"></i></a>

                            <div class="megamenu megamenu-md">
                                <div class="row no-gutters">
                                    <div class="col">
                                        <div style="padding-left:40px; padding-right:40px; padding-top:20px">
                                          
                                                 
                                                <div style="display: flex; gap:50px;" >
                                                    @foreach ($parent->allChildrens as $child)
                                                    <div clas="col">
                                                        <div class="menu-title"><a style="font-weight: 600" href="{{ route('category',$child->slug) }}">{{$child->name }}</a>
                                                        </div>  
                                                        <br><!-- End .menu-title -->
                                                        <ul style="margin-top: -20px">
                                                            @foreach ($child->allChildrens as $grand)
                                                            <li><a style="font-weight:500 ; " href="{{ route('category',$grand->slug) }}">{{$grand->name
                                                        }}</a></li>
                                                        @endforeach
                                                           
                                                           
                                                        </ul>
                                                    </div>
                                                    
                                                 
                                                    
                                                    @endforeach<!-- End .col-md-6 -->
                                                   
                                                </div><!-- End .col-md-6 -->

                                               
                                              
                                          
                                        </div><!-- End .menu-col -->
                                    </div><!-- End .col-md-8 -->

                                    <!-- End .col-md-4 -->
                                </div><!-- End .row -->
                            </div><!-- End .megamenu megamenu-md -->
                        </li>
                      @endif
                      @endforeach
                   
                        <li>
                            <a href="" >Blog</a>

                         
                        </li>
                        <li>
                            <a href="{{route('about')}}" >About us </a>

                         
                        </li>
                   
                    </ul>


                    <!-- End .menu -->
                </nav>


        </div>
    </div


    
 <!-- End .header-bottom -->
</header><!-- End .header -->

























