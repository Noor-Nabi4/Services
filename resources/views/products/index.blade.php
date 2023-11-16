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
    <div class="row my-2 justify-content-center">
        @for ($i = 0; $i < 8; $i++)
            <div class="col-md-3 me-2 my-2">
                <div class="card" style="max-width: 18rem;">
                    <img src="{{ asset('images/Youtube_Play_Button_English_textpsd.png') }}" class="card-img-top"
                        alt="Youtube Play Button">
                    <div class="card-body">
                        <h4 class="card-title text-center font-Roboto">
                            Custom YouTube Wood Play Button Creator Award
                        </h4>
                        <h5>
                            11,500
                        </h5>
                        <div class="flex justify-content-between">
                            <p class="text-decoration-line-through">
                                16500
                            </p>
                            <p>
                                Free shipping
                            </p>
                        </div>
                        <a href="#" class=""
                            style="background: #7750f6;color: #fff;margin: 0 auto;display: block;max-width: fit-content;padding: 0.25rem;border-radius: 10px;">Buy
                            Now</a>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</x-app-layout>
