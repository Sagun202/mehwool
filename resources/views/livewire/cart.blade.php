<br>


<div>
<div class="page-content" >
    <div class="cart">
        <div class="container">
            @if(count($items)>0)
            <div class="row">
                <div class="col-lg-9">
                    <table class="table table-cart table-mobile">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>attributes</th>
                                <th>Price</th>
                                <th>discount</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($items as $item)

                            @livewire('cart-item',['item'=>$item],key($item->id))

                            @endforeach
                        </tbody>
                    </table><!-- End .table table-wishlist -->


                </div><!-- End .col-lg-9 -->
                <aside class="col-lg-3">
                    <div class="summary summary-cart">
                        <h3 class="summary-title">Cart summary</h3><!-- End .summary-title -->


                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Qty</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Total</th>
                              </tr>
                            </thead>
                            <tbody>

                                @php($total = 0)
                                 @php($sub = 0)
                                @foreach ($items as $item)
                                @php($product = $item->product)
                                @if($product)


                              <tr>
                                <th scope="row">{{ ($item->quantity) }}</th>
                                <td  class="price-col2">{{ $product->title }}</td>
                                <td  class="price-col2">
                                        @if ($product->has_variation)
                                            @php($price = $item->product->price)
                                            Rs. {{ $price  }}
                                        @else
                                            Rs. {{ $product->price-$product->discount }}

                                        @endif
                                </td>
                                <td  class="price-col2">   @if ($product->has_variation)
                                    @php($price = $item->product->price)
                                    @php($sub =  ($price - $product->discount) * $item->quantity  )
                                    Rs. {{$sub}}
                                @else
                                @php($sub =  $product->discounted_price * $item->quantity  )
                                Rs. {{$sub}}


                                @endif</td>
                              </tr>
                              @php($total=$total + $sub )
                              @endif
                              @endforeach
                            </tbody>
                          </table>
                    <tr>
                        <th  class="price-col2"><h6>Grand Total
                            </h6> </th>

                        <td  class="price-col2"><h6>Rs. {{ $total }}</h6></td>
                    </tr>
                </table>



                @if(auth()->check())
                <a href="{{ route('checkout') }}" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
                @else
                <a class="btn btn-outline-primary-2 btn-order btn-block"  data-toggle="modal"  data-target="#signin-modal"> Login<i class="fas fa-arrow-right"></i></a>
                @endif

                    </div><!-- End .summary -->

                    <a href="{{ route('index') }}" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->
            @else
    <h3>No Items in Cart !!</h3><a class="btn btn-outline-dark-2 btn-block mb-3" href="{{ route('index') }}"><br> <span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
    @endif
        </div><!-- End .container -->
    </div><!-- End .cart -->
</div>

<style>
    .price-col2{
        font-size: 14px;
    }
</style>
<br>
