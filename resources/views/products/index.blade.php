<x-app-layout>

    <x-slot name="header"></x-slot>
    <div class="mt-5 heading">
        <h1>
            <img src="{{ asset('images/svg/electric.svg') }}" alt="electric">
            SMM Services | By Boostbazarteam
        </h1>
    </div>

    <div class="mt-5">
        <div class="d-flex">
            <div class="" style="background: #916dfd" style="padding: 5px">
                <img src="{{ asset('images/svg/Search.svg') }}" alt="Search">
            </div>
            <input type="text" class="form-control w-100">
            <button type="submit" class="d-block" style="background: #916dfd" style="padding: 5px">
                <img src="{{ asset('images/svg/Search.svg') }}" alt="Search" style="2rem">
            </button>
        </div>
    </div>

    <h3 class="text-center text-white font-arial py-2 font-weight-bold d-flex justify-center align-items-center my-3"
        style="background: #916dfd;border-radius:5px;
        font-family: Raleway;
        font-weight: 600">
        <img src="{{ asset('images/svg/History Icon.svg') }}" alt="Order History Icon" class="d-inline-block me-2"
            height="1.5rem" style="height: 1.5rem">
        Our Products
    </h3>
    <div class="card mt-3">
        @if (session('success'))
            <div class="alert alert-success text-center" role="alert">{{ session('success') }}</div>
        @endif
        @if (Auth::user()->is_admin)
            <div class="card-header d-flex justify-content-end">
                <a href="{{ route('products.create') }}" class="btn btn-primary">Create</a>
            </div>
        @endif
        <div class="card-body">
            <div class="d-flex justify-content-center">
                @foreach ($ProductsTypes as $ProductsType)
                    <div class="me-1">
                        <a href="" class="d-flex" style="background: #876bf8;color: #fff;
                        padding: 1px 8px 2px 0;">
                            @switch($ProductsType['type'])
                                @case('Showpiece')
                                    <img src="{{ asset('images/svg/ShowPiece White.svg') }}" alt="ShowPiece"
                                        style="width: 1.3rem;margin-right: 0.5rem;">
                                    Showpiece
                                @break

                                @case('E_commerce')
                                    <img src="{{ asset('images/svg/E_commerce Blue.svg') }}" alt="E_commerce"
                                        style="width: 1.3rem;margin-right: 0.5rem;">
                                    E-commerce
                                @break

                                @case('Subscriptions')
                                    <img src="{{ asset('images/svg/Subscription White.svg') }}" alt="Subscription"
                                        style="width: 1.3rem;margin-right: 0.5rem;">
                                    Subscriptions
                                @break
                            @endswitch
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="row my-2 justify-content-center">
                @foreach ($Products as $product)
                    <div class="col-md-3 me-2 my-2">
                        <div class="card" style="max-width: 18rem;">
                            <img src="{{ asset('Product_images/' . $product->image) }}" class="card-img-top"
                                alt="{{ $product->title }}">
                            <div class="card-body">
                                <h6 class="card-title text-center font-Roboto">
                                    {{ $product->title }}
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
                                <a href="#" class=""
                                    style="background: #7750f6;color: #fff;margin: 0 auto;display: block;max-width: fit-content;padding: 0.25rem;border-radius: 10px;">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
