<div class="padd" >
  <div  style="background: white; padding:10px; border-radius:20px">

    <div class="block-top padd">
   
      <h3>
        <center>
        Our <span style="color: red;">&nbsp;Categories</span>
      </center>
     </h3>
    
   
  
    <div class="seeall">
   
       
         <p>
                     <a href="{{ route('categories') }}">
                     View More &nbsp; <i class="fa fa-arrow-right"></i>
                     </a>
                  </p>
                
    </div>
    </div>
  <div class=" padd" >
    
  
  
    <div class="grid-container ">
  
  
  
      @foreach ($categories as $count=> $category)
      @if($count<5)
      <a href="{{ route('category',$category->slug) }}">
        <div class="col" style="background: white; border-radius: 5px;">
          <img src="{{ asset('storage/'.$category->image) }}" style="width: 100%; padding:20px" alt="">
          <center>
             <strong class="cate-nam">
              {{  Illuminate\Support\Str::limit($category->name, 15) }}
             </strong>
          </center>
       </div>
      </a>
  
    
  
  
  
      @endif
       @endforeach
       
  
  
    
      
  </div>
  </div>
  
  
  
  <br>
  </div>
  
</div>
<br>