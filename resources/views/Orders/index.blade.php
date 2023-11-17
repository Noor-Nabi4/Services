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
                            <a href="">
                                <img src="{{ asset('images/svg/New ORDER.svg') }}" alt="New ORDER">
                                New Order
                            </a>
                        </div>
                        <div class="order-page-link">
                            <a href="">
                                <img src="{{ asset('images/svg/New ORDER.svg') }}" alt="New ORDER">
                                My Favorites
                            </a>
                        </div>
                        <div class="order-page-link">
                            <a href="">
                                <img src="{{ asset('images/svg/Search brown.svg') }}" alt="Search">
                                Search By ID
                            </a>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex">
                            <div class="" style="background: #916dfd" style="padding: 5px">
                                <img src="{{ asset('images/svg/Search.svg') }}" alt="Search" style="2rem">
                            </div>
                            <input type="text" class="form-control w-100">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="Category" class="form-label">
                            Category
                        </label>
                        <input type="text" class="form-control w-100">
                    </div>
                    <div class="mb-3">
                        <label for="Category" class="form-label">
                            Service
                        </label>
                        <input type="text" class="form-control w-100">
                    </div>
                    <div class="mb-3">
                        <label for="Category" class="form-label">
                            Link
                        </label>
                        <input type="text" class="form-control w-100">
                    </div>
                    <div class="mb-3">
                        <label for="Category" class="form-label">
                            Quantity
                        </label>
                        <input type="text" class="form-control w-100">
                    </div>
                    <div class="mb-3">
                        <label for="Category" class="form-label">
                            Price
                        </label>
                        <input type="text" class="form-control w-100">
                    </div>
                    <div class="mb-3">
                        <button type="submit" style="background: #916dfd;color:#fff" class="btn">Buy Now</button>
                    </div>
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
                            <div class="flex justify-content-between align-items-center">
                                <div class="detail-sec">
                                    <p>
                                        Example Link
                                    </p>
                                    <p>
                                        www.example.com
                                    </p>
                                </div>
                                <div class="detail-sec-logo">
                                    <img src="{{ asset('images/svg/Example LInk.svg') }}" alt="link copy">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="flex justify-content-between align-items-center">
                            <div class="col flex justify-content-between align-items-center deatils pe-3 me-4">
                                <div class="detail-sec">
                                    <h6>
                                        Start Time
                                    </h6>
                                    <p>
                                        0-2hrs
                                    </p>
                                </div>
                                <div class="detail-sec-logo">
                                    <img src="{{ asset('images/svg/Start Time.svg') }}" alt="Start Time">
                                </div>
                            </div>
                            <div class="col flex justify-content-between align-items-center deatils pe-3">
                                <div class="detail-sec">
                                    <h6>
                                        Speed
                                    </h6>
                                    <p>
                                        100-150 per day
                                    </p>
                                </div>
                                <div class="detail-sec-logo">
                                    <img src="{{ asset('images/svg/Speed Meter.svg') }}" alt="Start Time">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="flex justify-content-between align-items-center">
                            <div class="col flex justify-content-between align-items-center deatils pe-3 me-4">
                                <div class="detail-sec">
                                    <h6>
                                        Guaranted
                                    </h6>
                                    <p>
                                        Lifetime
                                        <img src="{{ asset('images/svg/check.svg') }}" alt="check"
                                            style="height: 1rem" class="d-inline">
                                    </p>
                                </div>
                                <div class="detail-sec-logo">
                                    <img src="{{ asset('images/svg/Guaranty.svg') }}" alt="Guaranty">
                                </div>
                            </div>
                            <div class="col flex justify-content-between align-items-center deatils pe-3">
                                <div class="detail-sec">
                                    <h6>
                                        Averge Time
                                    </h6>
                                    <p>
                                        7 Days per 1000
                                    </p>
                                </div>
                                <div class="detail-sec-logo">
                                    <img src="{{ asset('images/svg/AVG Time.svg') }}" alt="AVG Time">
                                </div>
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
                                    While placing the order, you have to paste your channel handle or link correctly,
                                    after that you have to paste your The handle should not be changed, if you
                                    change it, the order will be canceled. Also, your channel should have a long
                                    video of minutes 01:00 to 01:30 video. Sometimes orders may be delayed
                                    due to server load.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
