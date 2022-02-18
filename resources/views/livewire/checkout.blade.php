<div class="row" style="background: white">
    <div class="col-md-8">
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
                @php($total = 0)
                @foreach ($items as $item)
                @php($product = $item->product)
                @if($product)
           
                <tr>
                    <td class="product-col">
                        <div class="product">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="{{ asset('storage/'.$product->thumbnail) }}" alt="{{ $product->title }}">
                                </a>
                            </figure>

                            <h3 class="product-title">
                                <a href="#">   {{ $product->title }}</a>
                            </h3><!-- End .product-title -->
                        </div><!-- End .product -->
                    </td>
                    <td>
                        @if($product->has_variation)
                       
                            <ul>
                                @foreach ($item->getAttributeArray() as $attribute)
                                <li>
                                    {{ $attribute->name }}:
                                    @php($name = $attribute->values->where('id',$item->variations[$attribute->id])->pluck('name'))
                                    <span>{{ $name[0] }}</span>
                                </li>
                                @endforeach
                            </ul>
                      
                        @endif
                    </td>
                    <td class="price-col">
                        @if ($product->has_variation)
                        @php($price = $item->variation->price)
                        Rs. {{ $price  }}
                    @else
                        Rs. {{ $product->price }}
            
                    @endif
                    </td>
                    <td>
                        RS {{$product->discount}}
                    </td>
                    <td class="quantity-col">
                        <div class="cart-product-quantity">
                            {{$item->quantity}}
                        </div><!-- End .cart-product-quantity -->                                 
                    </td>

                 <td class="total-col">
                      @if ($product->has_variation)
            @php($price = $item->variation->price)
            Rs. {{ ($price - $product->discount) * $item->quantity }}
        @else
            Rs. {{ $product->discounted_price * $item->quantity }}

        @endif
        </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>

    </div>



    <form class="col-md-4 summary summary-cart" wire:submit.prevent="checkout">
        <div class="checkout-box">
            <div class="checkout-billing-section">
                <div class="checkout-box-billing">
                    <div class="checkout-billing-header">
                        <div class="checkout-billing-icon">

                            <h4> <i class="fas fa-map-marker-alt"></i> Delivery Details</h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="district">State</label>
                        <select class="form-control" wire:model="state">
                            <option value="">Select State</option>
                            @foreach ($states as $state)
                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                        @error('state')
                        <span style="color: red; font-size:smaller;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>District</label>
                        <select class="form-control" wire:model="district">
                            <option value="">Select District</option>
                            @foreach ($districts as $district)
                            <option value="{{ $district->id }}">{{ $district->name }}</option>
                            @endforeach
                        </select>
                        @error('district')
                        <span style="color: red; font-size:smaller;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label>Area</label>
                            <select class="form-control" wire:model="area">
                                <option value="">Billing Address</option>
                                @foreach ($areas as $area)
                                <option value="{{ $area->id }}">{{ $area->name }}</option>
                                @endforeach
                            </select>
                            @error('area')
                            <span style="color: red; font-size:smaller;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
   
                   
<input type="checkbox" id="myCheck" />
Delivery Address

<div class="row" id="area" style="display: none;" >
 <div class="form-group">
                        <div class="form-group">
                            <label>Second Area</label>
                            <select class="form-control" wire:model="area">
                                <option value="">Select Area</option>
                                @foreach ($areas as $area)
                                <option value="{{ $area->id }}">{{ $area->name }}</option>
                                @endforeach
                            </select>
                            @error('area')
                            <span style="color: red; font-size:smaller;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
</div>
                    
                    
                    
                    <div class="form-group">

                        <label for="landmark">LandMark</label>
                        <input type="text" wire:model="landmark" class="form-control" id="landmark"
                            aria-describedby="textHelp" placeholder="Enter Land mark">
                        @error('landmark')
                        <span style="color: red; font-size:smaller;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">

                        <label for="contact">Contact</label>
                        <input type="text" wire:model="phone" class="form-control" id="contact"
                            aria-describedby="textHelp" placeholder="Enter Contact Number">
                        @error('phone')
                        <span style="color: red; font-size:smaller;">{{ $message }}</span>
                        @enderror
                    </div>
                    

                    @if(count($shippings)>0)

                    <div class="form-group">
                        <label>Select Shipping Method</label>
                    </div>
                    @foreach ($shippings as $ship)
                    <div class="form-group" style="display: flex; align-items:flex-start;">
                        <input type="radio" name="shipping" wire:model="shipping" value="{{ $ship->id }}"
                            id="shipping_{{ $ship->id }}">
                        <label for="shipping_{{ $ship->id }}" style="margin-left:5px; ">
                            <b>{{ $ship->shipping_method->name }} </b>Rs. {{ $ship->cost }}
                            <small>
                                Time({{ $ship->time_param_min }} to {{ $ship->time_param_max }}
                                {{ $ship->time_param }} )</small>
                        </label>

                    </div>
                    @endforeach

                    @endif
                    @if($not_found)
                    <h6 style="color:red;">Sorry!! Currently we cant ship these products in your area.</h6>
                    @endif
                    <div class="form-group">
                        <label for="">Payment Method</label>
                        <div>
                            <input type="radio" wire:model="payment_method" value="cod" id="payment_method">
                            <label for="payment_method">Cash On Delivery</label>
                            @error('payment_method')
                            <span style="color: red; font-size:smaller;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="checkout-box-billing-edit">
                    <a  href="{{ route('user.dashboard') }}"><button class="btn btn-outline-dark-2 btn-block mb-3">Edit</button> </a>
                </div>
            </div>
            <hr>
            <div class="checkout-order-section">
                <div class="checkout-order-heading">
                    Order Summary
                </div>
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
                        <td>{{ $product->title }}</td>
                        <td>
                                @if ($product->has_variation)
                                    @php($price = $item->variation->price)
                                    Rs. {{ $price  }}
                                @else
                                    Rs. {{ $product->price-$product->discount }}
                        
                                @endif
                        </td>
                        <td>   @if ($product->has_variation)
                            @php($price = $item->variation->price)
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
           
        </table>
                <table>
                    <tr>
                        <th>Subtotal ({{ count($items) }} items)</th>
                        <td>Rs {{ $total }}</td>
                    </tr>
                    @if($shipping)
                    @php($total+=$shippingDetail->cost)
                    <tr>
                        <th>Shipping Cost</th>
                        <td>Rs {{ $shippingDetail->cost }}</td>
                    </tr>
                    @endif

                    <tr class="checkout-order-total-row">
                        <th> Grand Total:</th>&nbsp;
                        <td>Rs. {{ $total }}</td>
                    </tr>
                </table>

            </div>
            <button type="submit" class="btn btn-outline-dark-2 btn-block mb-3">
                Proceed to Buy
            </button>
        </div>
    </form>
</div>
                 <style> #myCheck:checked + #area {
  display: block !important;
}</style>