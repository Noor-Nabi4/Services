<x-guest-layout>
    <div class="col-md-8 m-0-auto p-2 ">
    <div class="card pt-5 border-2">
        <div class="card-header">
            <h1 class="mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px"
                    height="30px" class="d-inline-block">
                    <image x="0px" y="0px" width="40px" height="30px"
                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAeAgMAAAAjs7ROAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAADFBMVEUAAAB3UPZ3UPb///9+JPh0AAAAAnRSTlMAAHaTzTgAAAABYktHRAMRDEzyAAAAB3RJTUUH5wsGFgsusqfkkQAAAFtJREFUGNNjYACB0FVLA4Bk1tIQhqhVq2DMLARz1apVE7AyF6AwgeQKUplYzEWyGMk5YQhHhkaFBjDgBqKhQBNCQ8FMoAGrVkKYq0BgKogpBmauBDG1wMxVlDMBG4NyvDeiXREAAAAASUVORK5CYII=" />
                </svg>
                Register On Boostbazarteam
            </h1>
            <p class="">
                If you are interesting to buying our SMM service you Sign up here.
            </p>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row">
                    <div class="col-md-6 d-flex border-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="26px" height="27px">
                            <image x="0px" y="0px" width="26px" height="27px"
                                xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAbCAQAAADIH1fgAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfnCwYWKxN/S4wiAAABU0lEQVQ4y7XSv0vDQBjG8W/StKUWtFsURNFNxcVNhOqg6KYFBSdxEScFR6X/gpNLQXAQXK2bDg4ZBV1EqEWo4o9BUUSK2KbLOSTWpF6uzeBz08H7uffu5TS8WSPGNgAZZhmgjMU+jyiyyA0mkOIQUV8vzAWTcWzGAIMTDxEIbCbkZIgqWQBWG4hAUCThL89iYvKEBUCcggQJFvxohwcu+aAbgGEpEez5UYISgoy7mw9A515iUGGDSfLuPhUwpjbV2KcDOlneIr0BFalJD7tQddI4lXYaRZm0hORpms0GUqCzOYJl7upf6ICuv2+Qp500/XxyRqGVLv8V2fVi9NJHD0nglRL3PKuOiDNDjmuqvum9Y7HFoAx0sM5VwCdy5njElJ+scKsAv+uYkZ935VoCzvpiKQIk2VV/fV+iVHRAww418ZoeqtyNg4xQJmIAgjeiIVD5Gx3V1kP/lNU8AAAAAElFTkSuQmCC" />
                        </svg>
                        <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                            :value="old('first_name')" required autofocus autocomplete="first_name"
                            placeholder="Enter your First Name" />
                    </div>
                    <div class="col-md-6">
                        <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                            :value="old('last_name')" required autofocus autocomplete="last_name"
                            placeholder="Enter your Last Name" />
                    </div>
                </div>

                <div class="mt-4 d-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="39"
                        height="39" viewBox="0 0 39 39">
                        <image id="email_Icon" data-name="email Icon" width="39" height="39"
                            xlink:href="data:img/png;base64,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" />
                    </svg>
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autocomplete="username" placeholder="Enter your Email" />
                </div>

                <div class="mt-4 d-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="27px"
                        height="28px">
                        <image x="0px" y="0px" width="27px" height="28px"
                            xlink:href="data:img/png;base64,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" />
                    </svg>

                    <x-input id="number" class="block mt-1 w-full" type="number" name="number" required
                        placeholder="Enter Your WhatsApp Number" />
                </div>

                <div class="mt-4">
                    <div class="row">
                        <div class="col-md-6 d-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="25px" height="32px">
                                <image x="0px" y="0px" width="25px" height="32px"
                                    xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAgCAMAAADQQiM0AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABGlBMVEV3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPZ3UPb///+UOHi8AAAAXHRSTlMAMorK6O3r1p9KBReb/MczJuL1XxvmSAi085dJNj963iJH1CkQpP6YAtAV+AoJZBlE6R6+jWLMDoWxwW+zbnbIJYC8BAEt5/n0+/Bl/frkQzG1Kq/XnVDOGhym9rhdSRYAAAABYktHRF2d3zABAAAAB3RJTUUH5wsGFicerU+/kwAAAPxJREFUKM9jYIACRiZmFlY2dg5OLgYUwM3DGwMFfPzIEgKCMQggJIyQEBGNQQFiMAlxCRBXUkpaRlZOHsRkU4DKKIJ4SspgtoqqGpCjrgGR0QSyebVgJjADedo6YKYuSIse3FJ9hE0GQJahEcI9xkC+CZhlCmSZmSNkLIB8SzBLD8iyEkfIWAP5NlhlbGEyXHZAlr2DEQyIOAL5Ts4uDK5u7iBHeyAAiO/p5c1gH4MdeDKw4ZCJIU7Gx8MXu4yfv1FAIFaZIJAfJLHIsIC9GYxNDzgYQrDJhAIlwrDaEw6UsaODDFuEUWQU9tDR9hBSIypEQ3DKKEazYgOSFgBWiru6t82X+gAAAABJRU5ErkJggg==" />
                            </svg>
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                placeholder="Enter Password" />
                        </div>
                        <div class="col-md-6">
                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" placeholder="Enter Confirm Password" />
                        </div>
                    </div>
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' =>
                                            '<a target="_blank" href="' .
                                            route('terms.show') .
                                            '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                            __('Terms of Service') .
                                            '</a>',
                                        'privacy_policy' =>
                                            '<a target="_blank" href="' .
                                            route('policy.show') .
                                            '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                            __('Privacy Policy') .
                                            '</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif
                <div class="mt-4">
                    <x-button class="me-1">
                        {{ __('Sign Up') }}
                    </x-button>
                    {{ __('Already Have an Account?') }}
                    <a class="ms-2 underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('welcome') }}">
                        {{ __('Sign in') }}
                    </a>

                </div>
            </form>
        </div>
        <h1 class="font-Myriad-Pro-Semibold">
            How To Create Account ?
        </h1>
    </div>
</div>
</x-guest-layout>
