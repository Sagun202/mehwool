 


<div class="product product-4 text-center">
    <figure class="product-media">
     
       <a href="{{ route('product.detail',$product->slug) }}">
       <img src="{{ asset('storage/'.$product->thumbnail) }}" alt="{{ $product->title }}" class="product-image">
       </a>
       
       
       
       <div class="product-action-vertical">
                                      @livewire('wish-list',['product'=>$product])
                                        @livewire('single-add-to-cart',['product'=>$product])
                                    </div>
                                    


       <!-- End .product-action -->
    </figure>
    <!-- End .product-media -->
    <div class="product-body">
       <h3 class="product-title"><a href="{{ route('product.detail',$product->slug) }}">{{ Illuminate\Support\Str::limit($product->title,20) }}</a></h3>
       <!-- End .product-title -->
       <div class="product-price">
        <p style="font-size:2rem ; font-weight:500;">NPR. {{ $product->price-$product->discount }}</p>
      </div>
        <p style="font-size: 2rem; font-weight:500; color: red; text-decoration: line-through;" class="before-price">NPR.{{ $product->price }} </p>
     
       <!-- End .product-price -->
    </div>
    <!-- End .product-body -->
 </div> 