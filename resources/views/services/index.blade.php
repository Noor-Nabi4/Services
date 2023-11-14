<x-app-layout>
    <x-slot name="header"></x-slot>
    <div class="mt-5 heading">
        <h1>
            <img src="{{ asset('images/svg/electric.svg') }}" alt="electric">
            SMM Services | By Boostbazarteam
        </h1>
    </div>
    <div class="mt-4">
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
</x-app-layout>
