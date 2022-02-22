{{-- {{dd($item->getAttributeArray())}} --}}

    <tr style="background: white; padding:10px" >
        @if($product)
        <td class="product-col">
            <div class="product">
                <figure class="product-media">
                    <a href="#">
                        <img src="{{ asset('storage/'.$product->thumbnail) }}" alt="Product image">
                    </a>
                </figure>

                <h3 class="product-title">
                    <a href="#">{{ $product->title }}</a>
                </h3><!-- End .product-title -->
            </div><!-- End .product -->
        </td>

        <td>
     @if($item->variation_quantity)
            @foreach($item->variation_quantity as $key => $value)



                    @foreach($item->getAttributeArray() as $attribute)
                    @foreach($attribute->values as $val)
                    {{-- {{dd($val)}} --}}
                    @php($name = $val->where('id',$key)->get())
                                        @endforeach

                    @foreach($name as $nam)
                    <div style="display: flex">
                    <h6>{{ucfirst($nam->name)}}&nbsp;:</h6>&nbsp;&nbsp;<h6>{{$value}}</h6>
                    </div>
                    @endforeach
                    {{-- @php($name = $attribute->values->where('id',$item->variations[$attribute->id])->pluck('name'))
                    <span>{{ $name[0] }}</span> --}}
                    @endforeach
                   @endforeach
            @else
            <h6>N/A</h6>
            @endif
    </td>

        <td class="price-col">

            @php($price = $item->product->price)
            Rs. {{ $price  }}

        </td>

        <td  class="price-col">
            RS {{$product->discount}}
        </td>
        <td>
            <form action="">
                <label for="cart-prodcuct-qty-select">Qty:</label>
                <select wire:model="quantity" id="cart-prodcuct-qty-select" name="cart-prodcuct-qty-select"
                    form="cart-prodcuct-qty-form">
                    @if($product->has_variation)
                    @for($i = 1; $i<=$item->product->quantity;$i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                        @else
                        @for($i = 1; $i<=$product->quantity;$i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor




                            @endif
                </select>

            </form>
        </td>
        <td class="total-col"> @if ($product->has_variation)
            @php($price = $item->product->price)
            Rs. {{ ($price - $product->discount) * $quantity }}
        @else
            Rs. {{ $product->discounted_price * $quantity }}

                @endif
        </td>

         <td>


        </td>

        <td class="remove-col"><button wire:click="clickRemove" class="btn-remove"><i class="bi bi-x-circle"></i></button></td>

        @endif
    </tr>