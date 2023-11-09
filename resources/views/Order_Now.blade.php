<x-app-layout>
    <x-slot name="header"></x-slot>
    <div class="mt-5">
        <div class="row">
            <div class="col me-2">
                <a href="">
                    Youtube
                </a>
            </div>
            <div class="col me-2">
                <a href="">
                    Instagram
                </a>
            </div>
            <div class="col me-2">
                <a href="">
                    Facebook
                </a>
            </div>
            <div class="col me-2">
                <a href="">
                    TikTok
                </a>
            </div>
        </div>
        <div class="">

            <h2 class="text-center my-3 font-arial" style="color: #916dfd">
                <span class="font-EmojiOneColor">👋</span> Hi there,
                {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}!
                Ready to place new order ?
            </h2>
        </div>
        <div class="row">
            <div class="col-md me-5">
                <div class="order-card p-2 pt-4">
                    <div class=" mb-3">
                        <a href="">
                            New Order
                        </a>
                        <a href="">
                            My Favorites
                        </a>
                        <a href="">
                            Search By ID
                        </a>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex">
                            <div class="" style="background: #916dfd" style="padding: 5px">
                                <img src="{{ asset('images/svg/Search Icon.svg') }}" alt="Search Icon" style="2rem">
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

                </div>
            </div>
            <div class="col-md">
                <div class="order-card details p-2 pt-4">
                    <div class="mb-3">
                        <a href="">
                            Details
                        </a>
                        <a href="">
                            Contact Us
                        </a>
                    </div>
                    <div class="mb-3">

                    </div>
                    <div class="mb-3">
                        <div class="flex"></div>
                    </div>
                    <div class="mb-3">
                        <div class="flex"></div>
                    </div>
                    <div class="mb-3"></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
