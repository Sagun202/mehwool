

   


    <div class="top-section" >
      <div class="product-block" style="background-color: white; padding: 10px;  border-radius: 5px;" >
         <div class="block-top">
            <h3>
               HOT<span style="color: red;"> PRODUCT</span>
            </h3>
            <div class="seeall">
           
                  <p>
                     <a href="{{ route('product.list','most-popular') }}">
                     View More &nbsp; <i class="fa fa-arrow-right"></i>
                     </a>
                  </p>
                
             
            </div>
         </div>
      
         <div class="owl-carousel hot owl-theme owl-loaded owl-drag">
            <div class="owl-stage-outer">
               <div class="owl-stage" style="transform: translate3d(-1527px, 0px, 0px); transition: all 0.25s ease 0s; width: 3334px;">
                 
                @foreach ($products as $product)
                <div class="owl-item " style="width: 128.906px; margin-right: 10px;">
                    <div class="item">
               
      
               {{ FrontEndHandler::getProductCard($product) }}
     
          
                 </div>
              </div>
                 @endforeach
                
               
            </div>
         </div>
      </div>
   </div>
</div>

   
   <script>


    var owl = $('.hot');
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
              items: 3,
               loop:true
            }
        }
    });
    
    
        </script>















