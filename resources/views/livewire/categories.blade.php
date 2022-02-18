<div class="index-categories-content">
    <ul id="help4">
        @foreach ($categories as$count=>$category)
        @if($count< 6)
        <li>
            <a href="{{ route('category',$category->slug) }}">
                <div class="index-categories-cards">
                    <img style="background:#ffc0cb; border-radius:100%;" src="{{ asset('public/storage/'.$category->image) }}" alt="{{ $category->name }}" onerror="this.src='{{ asset('dummy.png') }}'" />
                    <p>{{ $category->name }}</p>
                </div>
            </a>
        </li>
        @endif
        @endforeach
    </ul>
  
</div>



   
            
        
        
        
        
                                    
                                   
                                       
                                   
                                    
                                    
 
<div id="one">
    <div id="cut-product-cat">
      <div class="index-categories-content">
    <ul id="help4">
        @foreach ($categories as $category)

        <li>
            <a href="{{ route('category',$category->slug) }}">
                <div class="index-categories-cards">
                    <img style="background:#ffc0cb; border-radius:100%;" src="{{ asset('storage/'.$category->image) }}" alt="{{ $category->name }}" onerror="this.src='{{ asset('dummy.png') }}'" />
                    <p>{{ $category->name }}</p>
                </div>
            </a>
        </li>

        @endforeach
    </ul>
   
</div>

     
    </div>

</div>
        
            
            <div class="pagination-area">
                    <center>
                    <button id="tow4" class="btn btn-success" onclick="javascript:showDiv1();">see all</button>
            </center>
                

            </div>
            
            
          
                                               



<style>
    #cut-product-cat { display: none; }
</style>

<script>
    function showDiv1() {
    div4 = document.getElementById('cut-product-cat');
    div4.style.display = "block";
}
</script>

<script>
document.getElementById("tow4").addEventListener("click", myFunction1);

function myFunction1() {
    
      div4 = document.getElementById('help4');
    div4.style.display = "none";

}
</script>
