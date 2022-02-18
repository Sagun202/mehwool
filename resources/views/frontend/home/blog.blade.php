


<div class="row">
    <div class="col-md-12">
        <div class="section-title">
            <br>
            <center>
                <h4>
                    Our<span style="color: red;">Blogs</span>
                 </h4>
            </center>

            <div class="section-borders">
                <span></span>
                <span class="black-border"></span>
                <span></span>
            </div>
        </div>
    </div>
</div>
<br>










<div class="owl-carousel blog owl-theme owl-loaded owl-drag">
    <div class="owl-stage-outer">
       <div class="owl-stage" style="transform: translate3d(-1527px, 0px, 0px); transition: all 0.25s ease 0s; width: 3334px;">
         
        @foreach ($blogs as $blog)
        <div class="owl-item " style="width: 128.906px; margin-right: 10px;">
            <div class="item">
       


                            <article style="background:white; padding:10px; border-radius:10px;" class="entry entry-grid">
                				<figure class="entry-media">
                					<a href="{{route('blogs',$blog->slug)}}">
                						<img src="{{ asset('public/storage/'.$blog->image) }}" alt="{{$blog->title}}" alt="{{$blog->title}}">
                					</a>
                				</figure><!-- End .entry-media -->

                				<div class="entry-body text-center">
                				

                					<h2 class="entry-title">
                						<a href="{{route('blogs',$blog->slug)}}">{{$blog->title}}</a>
                					</h2><!-- End .entry-title -->

                                        	<div class="entry-meta">
                						<a href="{{route('blogs',$blog->slug)}}">  {{$blog->created_at}} </a>
                					</div><!-- End .entry-meta -->
                                        
                					<div class="entry-content">

                						<p>{{$blog->short_description}}</p>
                						<a href="{{route('blogs',$blog->slug)}}" class="read-more">Read More</a>
                					</div><!-- End .entry-content -->
                				</div><!-- End .entry-body -->
                			</article>
                			
                			

                
                   
             

  
         </div>
      </div>
         @endforeach
        
       
    </div>
 </div>


 <script>


    var owl = $('.blog');
    owl.owlCarousel({
     
        loop:true,
          dots: false,
        margin:10,
        autoplay:true,
        autoplayTimeout:2500,
        autoplayHoverPause:true,
        responsive: {
            0:{
              items: 3,
               loop:true
            },
            480:{
              items: 3,
               loop:true
            },
            769:{
              items: 6,
               loop:true
            }
        }
    });
    
    
        </script>
