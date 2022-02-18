
<div class="index-categories">
  <div class="container-fluid">
    <div class="index-categories-heading">
      <p>Explore our brands</p>
      <a href="brand.html">See all <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    
    
    
    <div class="owl-carousel brand owl-theme owl-loaded owl-drag">
            
       <div class="owl-stage-outer">
         
         <div class="owl-stage" style="transform: translate3d(-1527px, 0px, 0px); transition: all 0.25s ease 0s; width: 3334px;">
             @foreach ($brands as $brand)
           <div class="owl-item " style="width: 128.906px; margin-right: 10px;">
               
               <a href="{{ route('brand',$brand->slug) }}">
          
              <img style="width:75%"  src="{{ asset('storage/'.$brand->image) }}" />
   
     
          </a>

     
            </div>
               @endforeach
         </div>
         
         
      
         
           
  </div>
  
</div>
</div>
    
    
    <div class="index-categories-content grid-container2">

        @foreach ($brands   as $count=> $brand)
        @if($count <10)
     
         
     
   @endif
 @endforeach
 
    </div>
  </div>


 

    <script>


var owl = $('.brand');
owl.owlCarousel({
 
    loop:true,
      dots: false,
    margin:10,

    autoplayHoverPause:true,
    responsive: {
        0:{
          items: 5,
           loop:true
        },
        480:{
          items:5 ,
           loop:true
        },
        769:{
          items: 10,
           loop:true
        }
    }
});


    </script>
    