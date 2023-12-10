@foreach ($Products as $product)
    <div class="col-md-3 me-2 my-2">
        <div class="card" style="max-width: 18rem;">
            <img src="{{ asset('Product_images/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
            <div class="card-body">
                <h6 class="card-title text-center font-Roboto" style="min-height: 2.5rem;overflow:hidden"
                    title="{{ $product->name }}">
                    {{ strlen($product->name) > 47 ? substr($product->name, 0, 47) . '...' : $product->name }}
                </h6>
                <h5 class="price-color">
                    RS. {{ $product->discounted_amount }}
                </h5>
                <div class="flex justify-content-between">
                    <p class="text-decoration-line-through grey">
                        RS. {{ $product->amount }}
                    </p>
                    <p>
                        Free shipping
                    </p>
                </div>
                <a href="{{ route('order.checkoutProduct',$product->id) }}" class=""
                    style="background: #7750f6;color: #fff;margin: 0 auto;display: block;max-width: fit-content;padding: 0.25rem;border-radius: 10px;">
                    Buy Now
                </a>
            </div>
        </div>
    </div>
@endforeach
