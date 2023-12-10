<x-app-layout>
    <x-slot name="header"></x-slot>
    <div class="mt-5">
        <div class="row">
            <div class="col me-2 social-acconts">
                <div class="social-account-link">
                    <img src="{{ asset('images/svg/Youtube.svg') }}" alt="Youtube">
                    Youtube
                </div>
            </div>
            <div class="col me-2">
                <div class="social-account-link">
                    <img src="{{ asset('images/svg/Instagram.svg') }}" alt="Instagram">
                    Instagram
                </div>
            </div>
            <div class="col me-2">
                <div class="social-account-link">
                    <img src="{{ asset('images/svg/Facebook.svg') }}" alt="Facebook">
                    Facebook
                </div>
            </div>
            <div class="col me-2">
                <div class="social-account-link">
                    <img src="{{ asset('images/svg/tiktok.svg') }}" alt="tiktok">
                    TikTok
                </div>
            </div>
        </div>
        <div class="">

            <h4 class="text-center my-3 font-arial" style="color: #916dfd">
                <span class="font-EmojiOneColor">👋</span> Hi there,
                {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}!
                Ready to place new order?
            </h4>
        </div>
        <div class="row">
            <div class="col-md me-5">
                <div class="order-card p-2 pt-4">
                    <div class=" mb-3 d-flex order-page-links">
                        <div class="order-page-link active">
                            <img src="{{ asset('images/svg/New ORDER.svg') }}" alt="New ORDER">
                            New Order
                        </div>
                        {{-- <div class="order-page-link">
                            <img src="{{ asset('images/svg/My Favorite.svg') }}" alt="New ORDER">
                            My Favorites
                        </div> --}}
                    </div>
                    {{-- <form action="https://ipguat.apps.net.pk/Ecommerce/api/Transaction/PostTransaction"
                        method="post"id="OrderForm"> --}}
                        <form action="https://ipg1.apps.net.pk/Ecommerce/api/Transaction/PostTransaction"
                        method="post"id="OrderForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">
                                Item Name
                            </label>
                            <input type="text" name="name" id="name" readonly class="form-control w-100"
                                value="{{ $product->name }}" readonly>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="mb-3">
                                        <label for="channel_name" class="form-label">
                                            Channel Name <span class="red">*</span>
                                        </label>
                                        <input type="text" class="form-control w-100" name="channel_name"
                                            id="channel_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="subscribers" class="form-label">
                                        Subscribers Count <span class="red">*</span>
                                    </label>
                                    <input type="number" class="form-control w-100" name="subscribers"
                                        id="subscribers">
                                </div>
                                <div class="col-md-6">
                                    <label for="full_name" class="form-label">
                                        Full Name <span class="red">*</span>
                                    </label>
                                    <input type="text" class="form-control w-100" name="full_name" id="full_name">
                                </div>
                                <div class="col-md-6">
                                    <label for="CUSTOMER_EMAIL_ADDRESS" class="form-label">
                                        Email<span class="red">*</span>
                                    </label>
                                    <input type="text" class="form-control w-100" name="CUSTOMER_EMAIL_ADDRESS"
                                        id="email">
                                </div>
                                <div class="col-md-6">
                                    <label for="mobile_no" class="form-label">
                                        Mobile Number <span class="red">*</span>
                                    </label>
                                    <input type="number" class="form-control w-100" name="CUSTOMER_MOBILE_NO"
                                        id="mobile_no" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="postal_code" class="form-label">
                                        Postal Code <span class="red">*</span>
                                    </label>
                                    <input type="number" class="form-control w-100" name="postal_code"
                                        id="postal_code" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="state_id" class="form-label">
                                        State <span class="red">*</span>
                                    </label>
                                    <select name="state_id" id="state_id" class="form-control w-100" required>
                                        <option value="" selected disabled>Select State</option>
                                        @foreach ($states as $state)
                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="city_id" class="form-label">
                                        City <span class="red">*</span>
                                    </label>
                                    <select name="city_id" id="city_id" class="form-select" required>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">
                                Address
                            </label>
                            <input type="text" class="form-control w-100" name="address" id="address" required>
                        </div>
                        <div class="mb-3">
                            <label for="TXNAMT" class="form-label">
                                Price
                            </label>
                            <input type="number" class="form-control w-100" name="TXNAMT" id="TXNAMT"
                                value="{{ $product->discounted_amount }}" readonly>
                        </div>
                        <input type="hidden" name="CURRENCY_CODE"value="PKR">
                        <input type="hidden" name="SUCCESS_URL" value="{{ route('order.SUCCESS') }}" />
                        <input type="hidden" name="FAILURE_URL" value="{{ route('order.FAILURE') }}" />
                        <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}" />
                        <input type="hidden" name="CHECKOUT_URL"
                            value="{{ route('order.checkoutProduct', $product->id) }}" />
                        <input type="hidden" name="ORDER_DATE" value="{{ date('Y-m-d H:i:s', time()) }}" />
                        <input type="hidden" name="CUSTOMER_IPADDRESS" id="ip_address" value="" />
                        <input type="hidden" name="TXNDESC" value="{{ $product->description }}" />
                        <div id="fields"></div>
                        <div class="mb-3">
                            <button type="button" style="background: #916dfd;color:#fff" class="btn"
                                onclick="saveData('{{ route('order.store') }}')" id="sumbitForm">Buy
                                Now</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md">
                <div class="order-card-details p-2 pt-4">
                    <div class="mb-3 d-flex order-page-links">
                        <div class="order-page-link">
                            <a href="">
                                <img src="{{ asset('images/svg/Info.svg') }}" alt="info">
                                Details
                            </a>
                        </div>
                        <div class="order-page-link">
                            <a href="">
                                <img src="{{ asset('images/svg/Contact US.svg') }}" alt="Contact US">
                                Contact Us
                            </a>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="deatils pe-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <img src="{{ asset('Product_images/' . $product->image) }}"
                                    alt="{{ $product->name }}"
                                    style="height: 18rem;display:inline-block;margin:0 auto">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="">
                            <div class="deatils detail-sec">
                                <h6>
                                    Details
                                </h6>
                                <p class="mt-3">
                                    {{ $product->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-slot name="script">
            <script>
                dependentDropDown("/order/cities", "state_id", "city_id");
                getIpAddress();
            </script>
        </x-slot>
</x-app-layout>

+
