<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        {{-- bootstrap 5 --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

            <link rel="stylesheet" href="{{ asset('\fonts\MYRIADPRO\style.css') }}">
            <link rel="stylesheet" href="{{ asset('fonts/ambiente-sostenible_woff/style.css') }}">
            <link rel="stylesheet" href="{{ asset('fonts/open_sans/style.css') }}">
            <link rel="stylesheet" href="{{ asset('fonts/EmojiOne/style.css') }}">
            <link rel="stylesheet" href="{{ asset('fonts/Raleway/style.css') }}">
            <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="container-xxl" style="background: #f6fcfc">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class=" mx-4" style="background: #0056b30d;">
                    <div class="max-w-7xl mx-auto py-3 px-4 sm:px-6 lg:px-8">
                        {{-- {{ $header }} --}}
                        <div class="row menu-links">
                            <div class="col">
                                <a href="" class="text-uppercase">
                                    <img src="{{ asset('images/svg/Order Now Icon Blue.svg') }}" alt="Order Now Icon">
                                    <h6>
                                        Order Now

                                    </h6>
                                </a>
                            </div>
                            <div class="col">
                                <a href="" class="text-uppercase">
                                    <img src="{{ asset('images/svg/Services Icon Blue.svg') }}" alt="Order Now Icon">
                                    <h6>
                                        Services
                                    </h6>
                                </a>
                            </div>
                            <div class="col">
                                <a href="" class="text-uppercase">
                                    <img src="{{ asset('images/svg/Get Support Icon Blue.svg') }}" alt="Order Now Icon">
                                    <h6>
                                        Get Support
                                    </h6>
                                </a>
                            </div>
                            <div class="col">
                                <a href="" class="text-uppercase">
                                    <img src="{{ asset('images/svg/Marketplace Products Icon Blue.svg') }}" alt="Order Now Icon">
                                    <h6>
                                        Our PRODUCTS
                                    </h6>
                                </a>
                            </div>
                            <div class="col">
                                <a href="" class="text-uppercase">
                                    <img src="{{ asset('images/svg/Dashboard Icon Blue.svg') }}" alt="Order Now Icon">
                                    <h6>
                                        Dashboard
                                    </h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="shadow"  style="min-height: 2rem"></div>
            @endif

            <!-- Page Content -->
            <main class="mx-4 ">
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        <script src="{{ asset('js/js.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>
</html>
