<div class="col-md-6">
    <div class="product-details product-details-centered">
        <h1 class="product-title">  <strong style="color: red; font-size:40px;">{{ $title }} </strong></h1>  <!-- End .product-title -->



        <div class="ratings-container">
            <div class="ratings">
                <div  style="width: 80%;">
                    @php($avg = $product->reviews->avg('rate'))

                    @for($i=0;$i<$avg; $i++) <i class="bi bi-star"></i>
                    @endfor
                    @for($i=0;$i<5-$avg;$i++) <i class="bi bi-star-o"></i>
                    @endfor</div><!-- End .ratings-val -->
            </div><!-- End .ratings -->

            <a class="ratings-text" href="#product-review-link" id="review-link">( {{ count($product->reviews) }} Reviews )</a>

        </div><!-- End .rating-container -->
        <p class="availability in-stock pull-right">
            Availability: @if($product->quantity>0)<span>In Stock</span> @else <span
                style="background-color: red; color:white;">Out of
                Stock</span>@endif
        </p>

        <div class="product-price">
            Rs. {{ $product->price-$product->discount }}
            <br>

            <h6>
                     was RS. {{$product->discount}}
            </h6>
       
          
        </div><!-- End .product-price -->
  
        <div class="product-content">
            <p>{!! $product->short_description !!}</p>
        </div><!-- End .product-content -->


        @if($has_variation)
         <div class="color-grid" id="myTable">
               @foreach($variations as  $var)
             <div class="color">

                                <center>

                                    <img src="{{asset(asset('storage/'.$var->images[0]))}}">

                                </center>

                                <br>
                                 @foreach ($var->conf as $key => $attribute)
                    <center>
                            <input type="number" class="txtCal" wire:model="variation_quantity.{{ $attribute}}">

                        </center>
                        {{-- @endforeach --}}
                        @endforeach

             </div>
              @endforeach

         </div>



        <br>



        <style>
            .color-grid{
                display:grid;
                grid-template-columns: repeat(5,1fr);
                gap:10px;
            }
        </style>


        <br>

        <script>
            $(document).ready(function(){


                $("#myTable").on('input', '.txtCal', function () {
                    var calculated_total_sum = 0;

                    $("#myTable .txtCal").each(function () {
                        var get_textbox_value = $(this).val();
                        if ($.isNumeric(get_textbox_value)) {
                            calculated_total_sum += parseFloat(get_textbox_value);
                        }
                    });
                    $("#total_sum_value").html(calculated_total_sum);
                });

            });

        </script>
            <div class="details-action-col">
            <button style="margin-top: 30px" class="btn-product" title="Add to Cart" wire:click="addToCart" type="button">

                    <span> <i class="bi bi-cart3"></i> Add to
                        Cart</span>
            </button>

                <div style="margin-left: 10px;
            margin-top: 30px;">
                    @livewire('wish-list',['product'=>$product]) </div>


            </div>
{{--        <div>--}}
{{--            <h3> total Quantity:</h3>--}}
{{--            <h3 id="total_sum_value">--}}
{{--                0--}}
{{--            </h3>--}}
{{--        </div>--}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        @else

                <form action="#" method="post">
                    <div class="cart-plus-minus" >
                        <label for="qty">Quantity:</label>
                        <div class="numbers-row" style="display:flex; align-items: center; justify-content: center; ">
                            <div wire:click="decreaseQty" class="dec qtybutton">
                                <i class="fa fa-minus">&nbsp;</i>
                            </div>
                            <input style="width: 150px" type="text" class="qty" title="Qty" wire:model="quantity" id="qty" name="qty" disabled />
                            <div wire:click="increaseQty" class="inc qtybutton">
                                <i class="fa fa-plus">&nbsp;</i>
                            </div>
                        </div>
                    </div>

                </form>

            <div class="details-action-col">

                <button style="margin-top: 30px" class="btn-product" title="Add to Cart" wire:click="addToCart" type="button">

                    <span> <i class="bi bi-cart3"></i> Add to
                        Cart</span>
                </button>
                <div style="margin-left: 10px;
            margin-top: 30px;">
                    @livewire('wish-list',['product'=>$product]) </div>


            </div><!-- End .details-action-col -->



@endif

    </div><!-- End .product-details -->
</div