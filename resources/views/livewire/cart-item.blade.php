


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
        <td>
            <form action="">
                <label for="cart-prodcuct-qty-select">Qty:</label>
                <select wire:model="quantity" id="cart-prodcuct-qty-select" name="cart-prodcuct-qty-select"
                    form="cart-prodcuct-qty-form">
                    @if($product->has_variation)
                    @for($i = 1; $i<=$item->variation->quantity;$i++)
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
            @php($price = $item->variation->price)
            Rs. {{ ($price - $product->discount) * $quantity }}
        @else
            Rs. {{ $product->discounted_price * $quantity }}

        @endif
        </td>
    
        <td class="remove-col"><button wire:click="clickRemove" class="btn-remove"><i class="icon-close"></i></button></td>
        @endif
    </tr>


   
